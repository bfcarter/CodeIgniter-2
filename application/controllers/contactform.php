


<?php
class contactform extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->helper(‘form’); 
}
function index() {
$this->load->view('login');
}
}
?>