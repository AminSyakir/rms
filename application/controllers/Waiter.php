<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Waiter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Product_model');
        $this->load->model('Waiter_model');
    }

    public function index()
    {
        $data['title'] = 'Order';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['order'] = $this->Waiter_model->getAllOrder();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('waiter/index', $data);
        $this->load->view('templates/footer');
    }

    public function addOrder()
    {
        $data['title'] = 'Add New Order';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->Product_model->getAllProduct();
        $data['quantity'] = [1, 2, 3, 4, 5];
        $data['table'] = $this->Product_model->getAllTable();

        $this->form_validation->set_rules('product_name', 'Product Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('waiter/add-order', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Waiter_model->addOrderData();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">New order added!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
            redirect('waiter');
        }
    }

    public function deleteOrder($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->Waiter_model->deleteOrderData($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Order Deleted!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button></div>');
        redirect('waiter');
    }
}
