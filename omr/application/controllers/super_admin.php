<?php 

class super_admin extends CI_Controller{


	public function dashboard(){
		$admin_database = $this->session->userdata("logged_in");
        $employee_info = $this->table->employees($admin_database->employee_id);
        $department_info = $this->table->departments($admin_database->employee_id);
        $bank_info = $this->table->banks($admin_database->employee_id);
        $pf_info = $this->table->pf($admin_database->employee_id);
        $document_info = $this->table->documents($admin_database->employee_id);
        $num_admin=$this->db->select()->from('admin')->get();
        $num_hr=$this->db->select()->from('admin')->get();
        $num_employee=$this->db->select()->from('employees')->get();

        $this->load->view("admin/super/dashboard", [
            "employee_info" => $employee_info,
            "department_info" => $department_info,
            "bank_info" => $bank_info,
            "pf_info" => $pf_info,
            "document_info" => $document_info,
            "num_admin"=>$num_admin,
            "num_hr"=>$num_hr,
            "num_employee"=>$num_employee,
        ]);
	}

	public function employee_table(){
		$this->load->view('admin/super/employee_table');
	}
}






?>