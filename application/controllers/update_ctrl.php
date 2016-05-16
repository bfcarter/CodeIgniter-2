<?php
class update_ctrl extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('update_model');
}
function show_user_name() {
$id = $this->uri->segment(3);
$data['users'] = $this->update_model->show_users();
$data['single_user'] = $this->update_model->show_user_id($id);
$this->load->view('update_view', $data);
}
function update_user_name1() {
$id= $this->input->post('uname');
$data = array(
'user_name' => $this->input->post('uname'),
'user_email' => $this->input->post('uemail'),
'user_password' => $this->input->post('upassword')
);
$this->update_model->update_user_name1($name,$data);
$this->show_user_name();
}
}
?>

