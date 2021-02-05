<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cashier extends CI_Controller
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
        $data['title'] = 'Bill';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['status'] = $this->db->get_where('order_list', 'status')->row_array();
        $data['order'] = $this->Waiter_model->getAllOrder();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('cashier/index', $data);
        $this->load->view('templates/footer');
    }

    public function updateOrderStatus($id)
    {
        $data['title'] = 'Update Order Status';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['order'] = $this->Waiter_model->getOrderById($id);
        $data['status'] = ['Complete', 'In Process'];

        $this->form_validation->set_rules('status', 'Status', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('cashier/update-status-order', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Waiter_model->updateOrderStatusData();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Update order status successful!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
            redirect('cashier');
        }
    }
}
