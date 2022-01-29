<?php

class validate extends CI_Model
{
    public function login_validate($arr)
    {
        if (
            $arr = $this->db
                ->select()
                ->from("admin")
                ->where([
                    "username" => $arr["username"],
                    "password" => $arr["password"],
                ])
                ->get()
                ->row()
        ) {
            return true;
        } else {
            return false;
        }
    }
    public function validate_admin($arr)
    {
        return $arr->admin_type;
    }
    public function return_arr($arr)
    {
        $arr = $this->db
            ->select()
            ->from("admin")
            ->where([
                "username" => $arr["username"],
                "password" => $arr["password"],
            ])
            ->get()
            ->row();
        return $arr;
    }
}

?>
