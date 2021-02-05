<?php

class Employee_model extends CI_Model
{
    public function getAllEmployee()
    {
        return $this->db->get('user')->result_array();
    }

    public function addEmployeeData()
    {
        $email = $this->input->post('email', true);
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($email),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => $this->input->post('role_id', true),
            'is_active' => 1,
            'date_created' => time()
        ];
        $this->db->insert('user', $data);


        // $data = [

        //     "name" => $this->input->post('name', true),
        //     "contact_no" => $this->input->post('contact_no', true),
        //     "email" => $this->input->post('email', true),
        //     "role" => $this->input->post('role', true)

        // ];


    }

    public function deleteEmployeeData($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }

    public function getEmployeeById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
}
