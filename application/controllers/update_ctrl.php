<?php
class update_ctrl extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->helper(array('form', 'url'));
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

$this->update_model->update_user_id1($id,$data);

               
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                

                $this->load->library('upload', $config);
                $this->load->helper('directory');
                if ( ! $this->upload->do_upload())
                {                    
                      
                }
                else
                {
                                 
                }  
$this->show_user_id();
$this->load->view('successupdate', $data);
}

public function do_upload()
    {
        $data['view'] = 'upload_form';
        $this->load->view('load_view',$data);         
    }
    public function image_gallery()
    {
               
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                

                $this->load->library('upload', $config);
                $this->load->helper('directory');
                if ( ! $this->upload->do_upload())
                {                    
                      $data['map'] = directory_map('./upload/');
                      $data['msg'] =   $this->upload->display_errors();
                      $data['view'] = 'upload_success';
                      $this->load->view('load_view',$data);           
                }
                else
                {
                        $data['map'] = directory_map('./upload/');     
                        $data['msg'] = 'Image upload successfully';
                        $data['view'] = 'upload_success';
                        $this->load->view('load_view',$data);              
                }   
         
    }
    public function download_image($filename)
    {
        $base_path = base_url()."upload/";
        $this->load->helper('download');
       
        $data = file_get_contents($base_path.$filename);
        force_download($filename, $data);
    }
    public function download_all()
    {
        $this->load->library('zip');
         $this->load->helper('directory');
         $map = directory_map('./upload/');
         $base_path = base_url()."upload/";
         foreach ($map as $filename)
         {
             $data = file_get_contents($base_path.$filename);
             $this->zip->add_data($filename, $data);
         }
         $this->zip->archive("$base_path.images.zip");
         $this->zip->download('images.zip');           
    }


}
?>