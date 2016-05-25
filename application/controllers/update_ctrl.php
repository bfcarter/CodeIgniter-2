<?php
class update_ctrl extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->model('update_model');
}
function show_user_id() {
$id = $this->uri->segment(3);
$data['users'] = $this->update_model->show_users();
$data['single_user'] = $this->update_model->show_user_id($id);
$this->load->view('memberarea_view', $data);
}
function update_user_id1() {
$id= $this->session->userdata['id'];
$data = array(

'name' => $this->input->post('uname'),
'email' => $this->input->post('uemail'),
'password' => md5($this->input->post('upassword'))
);
echo $id;
$this->update_model->update_user_id1($id,$data);

               
                $config['upload_path']          = './images/';
                $config['allowed_types']        = 'gif|jpg|png';
                

                $this->load->library('upload', $config);
                $this->load->helper('directory');
                if ( ! $this->upload->do_upload())
                {                    
                      echo "error"; 
                }
                else
                {
                          echo "success";         
                }  
$this->show_user_id();
$this->load->view('successupdate', $data);
}




}
?>