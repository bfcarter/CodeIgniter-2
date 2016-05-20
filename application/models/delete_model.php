<?php
class delete_model extends CI_Model{
// Function to select all from table name users.
function show_users(){
$query = $this->db->get('userss');
$query_result = $query->result();
return $query_result;
}
// Function to select particular record from table name users.
function show_name($data){
$this->db->select('*');
$this->db->from('userss');
$this->db->where('name', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
// Function to Delete selected record from table name users.
function delete_name($id){
$this->db->where('name', $id);
$this->db->delete('users');
}
}
?> 