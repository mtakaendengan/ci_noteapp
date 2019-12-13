<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Meeting extends CI_Controller

{

    public function __construct()

    {

        parent::__construct();

        $this->load->model('Report_model');

    }



    public function archive()

    {

        $data['title'] = 'Archive Board';

        $this->load->model('Report_model', 'redel');

        $data['redel'] = $this->redel->getReportData();

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //echo 'selamat datang user ', $data['user']['nm_user'];

        $this->load->view('templates/user_header', $data);

        $this->load->view('templates/user_sidebar', $data);

        $this->load->view('templates/user_topbar', $data);

        $this->load->view('meeting/archive', $data);

        $this->load->view('templates/user_footer', $data);

    }



    public function report()

    {

        $data['title'] = 'Write Report';

        $this->load->model('Report_model', 'retype');

        $data['retype'] = $this->retype->getReportType();

        $data['retype'] = $this->db->get('report_type')->result_array();



        $this->load->model('Report_model', 'reday');

        $data['reday'] = $this->reday->getReportType();

        $data['reday'] = $this->db->get('report_day')->result_array();



        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //echo 'selamat datang user ', $data['user']['nm_user'];

        $data['report'] = $this->db->get('report')->result_array();



        $this->form_validation->set_rules('no_report', 'Report Number', 'required|trim');

        $this->form_validation->set_rules('dy_report', 'Report Day', 'required|trim');

        $this->form_validation->set_rules('dt_report', 'Report Date', 'required|trim');

        $this->form_validation->set_rules('pl_report', 'Report Place', 'required|trim');

        $this->form_validation->set_rules('st_report', 'Report Start Time', 'required|trim');

        $this->form_validation->set_rules('fi_report', 'Report End Time', 'required|trim');

        $this->form_validation->set_rules('mm_report', 'Report Attendance', 'required|trim');

        $this->form_validation->set_rules('mt_report', 'Report Attendance Level', 'required|trim');

        $this->form_validation->set_rules('ty_report', 'Report Type', 'required|trim');

        $this->form_validation->set_rules('nm_report', 'Report Name', 'required|trim');

        $this->form_validation->set_rules('ag_report', 'Report Agenda', 'required|trim');

        $this->form_validation->set_rules('rd_report', 'Report Rundown', 'required|trim');

        $this->form_validation->set_rules('cn_report', 'Report Conclusion', 'required|trim');

        //$this->form_validation->set_rules('dc_report', 'Report Document', 'required');

        //$this->form_validation->set_rules('sn_report', 'Report Sound', 'required');

        //$this->form_validation->set_rules('id_rv', 'ID Reviewer', 'required|trim');

        //$this->form_validation->set_rules('id_av', 'ID Approver', 'required|trim');



        if ($this->form_validation->run() == false) {

            $this->load->view('templates/user_header', $data);

            $this->load->view('templates/user_sidebar', $data);

            $this->load->view('templates/user_topbar', $data);

            $this->load->view('meeting/report', $data);

            $this->load->view('templates/user_footer', $data);

        } else {

            $this->Report_model->addReportData();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Report Added

            </div>');

            redirect('meeting/archive');

        }

    }



    public function reportViw($id_report)

    {

        $data['title'] = 'Report View';

        $data['idrep'] = $this->Report_model->getReportByID($id_report);

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();



        $this->load->view('templates/user_header', $data);

        $this->load->view('templates/user_sidebar', $data);

        $this->load->view('templates/user_topbar', $data);

        $this->load->view('meeting/reportviw', $data);

        $this->load->view('templates/user_footer', $data);

    }

    public function downloadDc($id_report)

    {

        $this->load->helper('download');

        $fileinfo = $this->Report_model->getReportByID($id_report);

        $file = './assets/doc/' . $fileinfo['dc_report'];

        force_download($file, NULL);

    }



    public function downloadSn($id_report)

    {

        $this->load->helper('download');

        $fileinfo = $this->Report_model->getReportByID($id_report);

        $file = './assets/doc/' . $fileinfo['sn_report'];

        force_download($file, NULL);

    }



    public function printReport($id_report)

    {

        // $this->load->helper('download');

        $print['idrep'] = $this->Report_model->getReportByID($id_report);

        $this->load->view('meeting/reportprn', $print);

    }



    public function upload()

    {

        $data['title'] = 'Write Report';

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('file1', 'Report Document', 'required');

        $this->form_validation->set_rules('file2', 'Report Sound', 'required');

        // $this->load->view('templates/user_header', $data);

        // $this->load->view('templates/user_sidebar', $data);

        // $this->load->view('templates/user_topbar', $data);

        $this->load->view('meeting/tesupload', $data);

        // $this->load->view('templates/user_footer', $data);



        $config['upload_path']   = './assets/img';

        $config['allowed_types'] = 'doc|docx|pdf|mp3';

        $config['max_size']      = 0;

        //$config['max_width']     = 1024; 

        //$config['max_height']    = 768;  

        $this->load->library('upload', $config);

        // script upload file pertama

        $this->upload->do_upload('file1');

        $file1 = $this->upload->data();

        echo "<pre>";

        print_r($file1);

        echo "</pre>";



        // script uplaod file kedua

        $this->upload->do_upload('file2');

        $file2 = $this->upload->data();

        echo "<pre>";

        print_r($file2);

        echo "</pre>";

        //var_dump($file1, $file2);

        //die;

    }

    public function index()

    {

        $this->load->view('meeting/tesupload');

    }



    public function updateReview($id_report)

    {

        $this->Report_model->upReviewData($id_report);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Reviewed</div>');

       // redirect('meeting/reportviw/' . $id_report);

    }

    public function updateApprove($id_report)

    {



        $this->Report_model->upApproveData($id_report);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Approved</div>');

        //redirect('meeting/reportviw/' . $id_report);

    }



    public function reportDel($id_report)

    {

        $this->Report_model->deleteReportData($id_report);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Report Deleted</div>');

        redirect('meeting/archive/');

    }

}

