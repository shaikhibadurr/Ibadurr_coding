<?php

class normal_user extends CI_Controller
{
    public function dashboard()
    {
        $admin_database = $this->session->userdata("logged_in");

        $employee_info = $this->db
            ->select()
            ->from("employees")
            ->where(["id" => $admin_database->employee_id])
            ->get()
            ->row();
        $department_info = $this->db
            ->select()
            ->from("departments")
            ->where("employee_id", $admin_database->employee_id)
            ->get()
            ->row();
        $bank_info = $this->db
            ->select()
            ->from("banks")
            ->where("employee_id", $admin_database->employee_id)
            ->get()
            ->row();
        $pf_info = $this->db
            ->select()
            ->from("pf")
            ->where("employee_id", $admin_database->employee_id)
            ->get()
            ->row();
        $document_info = $this->db
            ->select()
            ->from("documents")
            ->where("employee_id", $admin_database->employee_id)
            ->get()
            ->row();
        $this->load->view("admin/normal/normal_dashboard", [
            "employee_info" => $employee_info,
            "department_info" => $department_info,
            "bank_info" => $bank_info,
            "pf_info" => $pf_info,
            "document_info" => $document_info,
        ]);
    }

    public function logout()
    {
        $this->session->unset_userdata("logged_in");
        return redirect("omr_dashboard/login");
    }
}

?>
