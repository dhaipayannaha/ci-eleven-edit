<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeModel extends CI_Model {
    // start 10 'employee' holo db table name
	public function getEmployee()
	{
        $query = $this->db->get('employee');
		return $query->result();
		
	}
	// end 10

	public function insertEmployee($data)
	{
        $this->db->insert('employee',$data);
		
	}

	public function editEmployee($id)
	{
		$query = $this->db->get_where('employee',['id'=> $id]);
		return $query->row();
	}
	
}