<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members_only extends CI_Controller {
    
     public function __construct()
      {
                parent::__construct();
                $this->validate_user();
      }
      public function validate_user()
      {
          $is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
                    redirect('welcome/login');

                    
		}	
          
      }
      public function index()
      {
                $data['name'] = $_SESSION['name'];
                $data['view'] = 'memberarea_view';
                $this->load->view('load_view',$data);
          
      }
        <?php echo form_input('name',
    ($ae == 'edit') ? $records[0]->name : set_value('name')
); ?>
}
