
<?php
class delete_ctrl extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('delete_model');
}
// Function to Fetch selected record from database.
function show_name() {
$id = $this->uri->segment(3);
$data['users'] = $this->delete_model->show_users();
$data['single_user'] = $this->delete_model->show_name($id);
$this->load->view('delete_view', $data);
}
// Function to Delete selected record from database.
function delete_name() {
$id = $this->uri->segment(3);
$this->delete_model->delete_name($id);
$this->show_name();
}
}
?>