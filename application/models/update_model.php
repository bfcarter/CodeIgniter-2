<?php
class update_model extends CI_Model{
// Function To Fetch All Record
function show_users(){
$query = $this->db->get('users');
$query_result = $query->result();
return $query_result;
}
// Function To Fetch Selected Record
function show_name($data){
$this->db->select('*');
$this->db->from('users');
$this->db->where('name', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
// Update Query For Selected User
function update_name1($name,$data){
$this->db->where('name', $name);
$this->db->update('users', $data);
}
}
?>
