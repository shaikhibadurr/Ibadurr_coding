<?php

class table extends CI_Model{
	// will return employees table of given id
	public function employees($id){
		$employee = $this->db
            ->select()
            ->from("employees")
            ->where(["id" => $id])
            ->get()
            ->row();
            return $employee;
	}

	public function departments($id){
		$department = $this->db
            ->select()
            ->from("departments")
            ->where("employee_id", $id)
            ->get()
            ->row();
          	return $department;
	}
	public function banks($id){
		$banks = $this->db
            ->select()
            ->from("banks")
            ->where("employee_id", $id)
            ->get()
            ->row();
          	return $banks;
	}
	public function pf($id){
		$pf = $this->db
            ->select()
            ->from("pf")
            ->where("employee_id", $id)
            ->get()
            ->row();
          	return $pf;
	}
	public function documents($id){
		$documents = $this->db
            ->select()
            ->from("documents")
            ->where("employee_id", $id)
            ->get()
            ->row();
          	return $documents;
	}
	
}

?>