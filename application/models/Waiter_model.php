<?php

class Waiter_model extends CI_Model
{
    public function getAllOrder()
    {
        return $this->db->get('order_list')->result_array();
    }

    public function getOrderById($id)
    {
        return $this->db->get_where('order_list', ['id' => $id])->row_array();
    }

    public function addOrderData()
    {
        $data = [
            "product_name" => $this->input->post('product_name', true),
            "order_quantity" => $this->input->post('order_quantity', true),
            "table_name" => $this->input->post('table_name', true),

        ];

        $this->db->insert('order_list', $data);
    }

    public function deleteOrderData($id)
    {
        $this->db->delete('order_list', ['id' => $id]);
    }

    public function updateOrderStatusData()
    {
        $data = [
            "status" => $this->input->post('status', true),

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('order_list', $data);
    }
}
