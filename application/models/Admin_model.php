<?php

class Admin_model extends CI_Model
{
    public function deleteRoleData($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
    }

    public function addRoleData()
    {
        $data = [
            "role" => $this->input->post('role', true),

        ];

        $this->db->insert('user_role', $data);
    }

    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function editRoleData()
    {
        $data = [
            "role" => $this->input->post('role', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', $data);
    }
}
