<?php
class update_ctrl extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('update_model');
}
function show_id() {
$name = $this->uri->segment(3);
$data['users'] = $this->update_model->show_users();
$data['single_user'] = $this->update_model->show_name($name);
$this->load->view('memberarea_view', $data);
}
function update_id1() {
$name= $this->input->post('uid');
$data = array(

'name' => $this->input->post('uname'),
'email' => $this->input->post('uemail'),
'password' => $this->input->post('upassword')
);
$this->update_model->update_id1($uid,$data);
$this->show_name();
$this ->load->view('memberarea_view', $data);
}
}
?>

