<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class image_controller extends CI_Controller {
  
    public function index()
    {
           $data['view'] = 'memberarea_view';
           $this->load->view('load_view',$data);
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
