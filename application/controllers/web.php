<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');
class Web extends CI_Controller
{
    function construct()
    {
        parent::construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }
    public function about()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }
}