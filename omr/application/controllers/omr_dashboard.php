<?php

class omr_dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view("omr_dashboard/header");
    }
    public function login()
    {
        if (!$this->session->userdata("logged_in")) {
            if ($this->form_validation->run("login_rules")) {
                if ($this->input->server("REQUEST_METHOD") === "POST") {
                    $post = $this->input->post();
                    $arr=$this->validate->return_arr($post);
                        if ($this->validate->login_validate($post)) {
                        	if($this->validate->validate_admin($arr)==="normal"){
                            $this->session->set_userdata("logged_in",$arr);
                            return redirect("normal_user/dashboard");
                        }elseif($this->validate->validate_admin($arr)==="super_admin"){
                            $this->session->set_userdata("logged_in",$arr);
                        	return redirect("super_admin/dashboard");
                        }else{
                        	echo "not normal user";
                        }
                        } else {
                            $this->session->set_flashdata(
                                "msg",
                                "*Invalid Credentials"
                            );
                            $this->load->view("omr_dashboard/login");
                        }
                } else {
                    $this->load->view("omr_dashboard/login");
                }
            } else {
                $this->load->view("omr_dashboard/login");
            }
        } else {
            return redirect("normal_user/dashboard");
        }
    }
}

?>
