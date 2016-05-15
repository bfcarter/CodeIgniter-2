<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  
	public function index()
	{
           $data['view'] = 'login_view';
           $this->load->view('load_view',$data);
        }
        public function signup()
	{
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name','Name','min_length[5]|max_length[20]');
            $this->form_validation->set_rules('email','E-mail','valid_email');
            $this->form_validation->set_rules('password','Password','min_length[5]|max_length[8]|callback_custom_rule');
            $this->form_validation->set_rules('password_confirm','Confirm Password','matches[password]');
            
            if ($this->form_validation->run() == FALSE)
                {
                     
                        $data['view'] = 'signup_view';
                        $this->load->view('load_view',$data);
                }
                else
                {
                    $user = array(
                               'name' => $_POST['name'],
                               'email' => $_POST['email'],
                               'password' => md5($_POST['password'])             
                                );
                    $this->load->model('Sample_model');
                    if(!$this->Sample_model->add_user($user))
                    {
                        die('something went wrong while adding user');
                    }else
                    {
                        $data['view'] = 'Success_view';
                        $this->load->view('load_view',$data);
                    }
                }
        }
        function login()
        {
            $this->load->library('form_validation');    
            $this->form_validation->set_rules('email','E-mail','valid_email');
            $this->form_validation->set_rules('password','Password','min_length[5]|max_length[8]');
                       
            if ($this->form_validation->run() == FALSE)
                {
                     
                        $data['view'] = 'login_view';
                        $this->load->view('load_view',$data);
                }
                else
                {
                    $this->load->model('Sample_model');

                    $credentials = array(
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password'])
                    );




                    $user =$this->Sample_model->check_user($credentials);
                        if($user->num_rows() == 1)
                    {
                        $user = $user ->row();




                        $session = array(
                            'name' => $user->name,
                            'is_logged_in' => TRUE
                            );
                        $this->session->set_userdata($session);
                        redirect('welcome/member_area');
                    } else {
                        $data['view'] = 'error_view';
                        $data['msg'] = 'Login failed';
                        $this->load->view('load_view',$data);
                    }
                    
                
                }
        }

        public function member_area()
        {
            if(isset($_SESSION['is_logged_in']))
            {
            $data['name'] = $_SESSION['name'];
            $data['view'] = 'memberarea_view';
            $this->load->view('load_view', $data);
        }
            else        die('die');
        }
              
                function custom_rule($str)
        {
             if ($str == $_POST['name'])
                {
                        $this->form_validation->set_message('custom_rule', 'password cannot be name!');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
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
        




        function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/login');
	}
        


}
