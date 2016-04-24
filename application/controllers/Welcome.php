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
                    $email = $_POST['email'];
                    $password = md5($_POST['Password']);
                    if($this->Sample_model->check_user($email,$password) == 1)
                    {
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
            $data['view'] = 'memberarea_view';
            $this->load->view('load_view', $data);
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
        function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
        
}

