<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Report_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //echo 'selamat datang user ', $data['user']['nm_user'];
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('report', $data);
        $this->load->view('templates/user_footer', $data);
    }
    public function review()
    {
        $data['title'] = 'Review Report';
        $this->load->model('Report_model', 'revdel');
        $data['revdel'] = $this->revdel->getReviewData();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //echo 'selamat datang user ', $data['user']['nm_user'];
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('report/review', $data);
        $this->load->view('templates/user_footer', $data);
    }
    public function approve()
    {
        $data['title'] = 'Approve Report';
        $this->load->model('Report_model', 'apvdel');
        $data['apvdel'] = $this->apvdel->getApproveData();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //echo 'selamat datang user ', $data['user']['nm_user'];
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('report/approve', $data);
        $this->load->view('templates/user_footer', $data);
    }
}
