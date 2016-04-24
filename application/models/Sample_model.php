<?php
class Sample_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function add_user($user)
        {
            return $this->db->insert('users', $user);
        }
        public function check_user($credentials)
        {
          $this->db->where($credentials);
          return $this->db->get('users');
        }
}

