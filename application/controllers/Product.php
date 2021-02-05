<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Product_model');
    }

    public function index()
    {
        $data['title'] = 'Product Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['product'] = $this->Product_model->getAllProduct();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer');
    }

    public function productAdd()
    {
        $data['title'] = 'Add Product';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['category'] = ['Makanan', 'Minuman'];

        $this->form_validation->set_rules('product_name', 'Product Name', 'required|trim');
        $this->form_validation->set_rules('product_price', 'Product Price', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('product/product-add', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Product_model->addProductData();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">New product added!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
            redirect('product');
        }
    }

    public function productDelete($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->Product_model->deleteProductData($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Product Deleted!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button></div>');
        redirect('product');
    }

    public function productUpdate($id)
    {
        $data['title'] = 'Update Product';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->Product_model->getProductById($id);
        $data['category'] = ['Makanan', 'Minuman'];

        $this->form_validation->set_rules('product_name', 'Product Name', 'required|trim');
        $this->form_validation->set_rules('product_price', 'Product Price', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('product/product-update', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Product_model->updateProductData();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Update product successful!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
            redirect('product');
        }
    }

    // ----- table -----

    public function table()
    {
        $data['title'] = 'Table Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['table'] = $this->Product_model->getAllTable();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('product/table', $data);
        $this->load->view('templates/footer');
    }

    public function addTable()
    {
        $data['title'] = 'Add New Table';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['capacity'] = [1, 2, 3, 4, 5];

        $this->form_validation->set_rules('table_name', 'Table Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('product/add-table', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Product_model->addTableData();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">New table added!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
            redirect('product/table');
        }
    }

    public function updateTable($id)
    {
        $data['title'] = 'Update Table';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['table'] = $this->Product_model->getTableById($id);
        $data['capacity'] = [1, 2, 3, 4, 5];

        $this->form_validation->set_rules('table_name', 'Table Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('product/update-table', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Product_model->updateTableData();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Update table successful!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
            redirect('product/table');
        }
    }

    public function deleteTable($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->Product_model->deleteTableData($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Table Deleted!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button></div>');
        redirect('product/table');
    }
}
