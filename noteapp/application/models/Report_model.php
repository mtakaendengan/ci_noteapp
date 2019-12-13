<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Report_model extends CI_Model

{

    public function getReportData()

    {

        $query = "SELECT *

        FROM `report` 

        INNER JOIN `report_type` on  `report`.`ty_report` = `report_type`.`id_type`

        INNER JOIN `user` on `report`.`id_user` = `user` . `id_user`

        INNER JOIN `report_day` on `report`.`dy_report` = `report_day` . `id_day`

        INNER JOIN `report_review` on `report`.`rv_report` = `report_review` . `id_review`

        INNER JOIN `report_approve` on `report`.`av_report` = `report_approve` . `id_approve`

        ";

        return $this->db->query($query)->result_array();

    }

    public function addReportData()

    {



        $config['upload_path']   = './assets/doc';

        $config['allowed_types'] = 'doc|docx|pdf|mp3';

        $config['max_size']      = 0;

        $this->load->library('upload', $config);



        // script upload file pertama

        $this->upload->do_upload('dc_report');

        $dc = $this->upload->data();



        // script uplaod file kedua

        $this->upload->do_upload('sn_report');

        $sn = $this->upload->data();



        $data = [

            'no_report' => $this->input->post('no_report', true),

            'dy_report' => $this->input->post('dy_report', true),

            'dt_report' => $this->input->post('dt_report', true),

            'pl_report' => $this->input->post('pl_report', true),

            'st_report' => $this->input->post('st_report', true),

            'fi_report' => $this->input->post('fi_report', true),

            'pl_report' => $this->input->post('pl_report', true),

            'mm_report' => $this->input->post('mm_report', true),

            'mt_report' => $this->input->post('mt_report', true),

            'ty_report' => $this->input->post('ty_report', true),

            'nm_report' => $this->input->post('nm_report', true),

            'ag_report' => $this->input->post('ag_report', true),

            'rd_report' => $this->input->post('rd_report', true),

            'cn_report' => $this->input->post('cn_report', true),

            'dc_report' => $dc['file_name'],

            'sn_report' => $sn['file_name'],

            'id_rv' => 0,

            'id_av' => 0,

            'rv_report' => 2,

            'av_report' => 2,

            'id_user' => $this->input->post('id_user', true)

        ];

        $this->db->insert('report', $data);

    }

    public function editReportData()

    {

        $query = "SELECT `sub_menu`.*, `menu`.`nm_menu`

                  from `sub_menu` Join `menu`

                  on `sub_menu`.`id_menu` = `menu`.`id_menu`

    ";

        return $this->db->query($query)->result_array();

    }

    public function viewReportData()

    {

        $query = "SELECT `sub_menu`.*, `menu`.`nm_menu`

                  from `sub_menu` Join `menu`

                  on `sub_menu`.`id_menu` = `menu`.`id_menu`

    ";

        return $this->db->query($query)->result_array();

    }

    public function deleteReportData($id_report)

    {

        $this->db->where('id_report', $id_report);

        $this->db->delete('report');

    }



    public function getReviewData()

    {

        $query =    "SELECT *

                    from    `report`

                    where `rv_report` = 2 and `id_rv` = 2

    ";

        return $this->db->query($query)->result_array();

    }

    public function getApproveData()

    {

        $query =    "SELECT *

                    from    `report`

                    where `rv_report` = 2 and `id_rv` = 2 and `av_report` = 2

    ";

        return $this->db->query($query)->result_array();

    }



    public function getReportType()

    {

        $query = "SELECT *

        FROM `report` 

        INNER JOIN `report_day` on `report`.`dy_report` = `report_day` . `id_day`

        INNER JOIN `report_type` on  `report`.`ty_report` = `report_type`.`id_type`

        INNER JOIN `user` on `report`.`id_user` = `user` . `id_user`

       

    ";

        return $this->db->query($query)->result_array();

    }



    public function getReportByID($id_report)

    {

        $query = "SELECT *

        FROM `report` 

        INNER JOIN `report_day` on `report`.`dy_report` = `report_day` . `id_day`

        INNER JOIN `report_type` on  `report`.`ty_report` = `report_type`.`id_type`

        INNER JOIN `report_review` on  `report`.`rv_report` = `report_review`.`id_review`

        INNER JOIN `report_approve` on  `report`.`av_report` = `report_approve`.`id_approve`

        INNER JOIN `user` on `report`.`id_user` = `user` . `id_user`

        WHERE `id_report` = $id_report

        ";

        return $this->db->query($query)->row_array();

        // return $this->db->get_where('user', ['id_user' => $id_user])->row_array();

    }



    public function upReviewData($id_report)

    {

        $this->db->set('rv_report', 1);

        //$this->db->set('id_rv', $xid_report['id_user']);

        $this->db->where('id_report', $id_report);

        $this->db->update('report');

    }

    public function upApproveData($id_report)

    {

        $this->db->set('av_report', 1);

        //$this->db->set('id_av', $id_report['id_user']);

        $this->db->where('id_report', $id_report);

        $this->db->update('report');

    }

}

