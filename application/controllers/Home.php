<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'subtitle' => '',
            'page' => 'v_dashboard'//file view di folder view
        );
        $this->load->view('v_template',$data, false); //template
    }
   
}