<?php

class Product_model extends CI_Model
{
    public function getAllProduct()
    {
        return $this->db->get('product')->result_array();
    }

    public function addProductData()
    {
        $data = [
            "product_name" => $this->input->post('product_name', true),
            "product_price" => $this->input->post('product_price', true),
            "product_category" => $this->input->post('product_category', true),

        ];

        $this->db->insert('product', $data);
    }

    public function deleteProductData($id)
    {
        $this->db->delete('product', ['id' => $id]);
    }

    public function getProductById($id)
    {
        return $this->db->get_where('product', ['id' => $id])->row_array();
    }

    public function updateProductData()
    {
        $data = [
            "product_name" => $this->input->post('product_name', true),
            "product_price" => $this->input->post('product_price', true),
            "product_category" => $this->input->post('product_category', true),

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('product', $data);
    }

    // ----- table -----

    public function getAllTable()
    {
        return $this->db->get('table_m')->result_array();
    }

    public function addTableData()
    {
        $data = [
            "table_name" => $this->input->post('table_name', true),
            "table_capacity" => $this->input->post('table_capacity', true),

        ];

        $this->db->insert('table_m', $data);
    }

    public function getTableById($id)
    {
        return $this->db->get_where('table_m', ['id' => $id])->row_array();
    }

    public function updateTableData()
    {
        $data = [
            "table_name" => $this->input->post('table_name', true),
            "table_capacity" => $this->input->post('table_capacity', true),

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('table_m', $data);
    }

    public function deleteTableData($id)
    {
        $this->db->delete('table_m', ['id' => $id]);
    }
}
