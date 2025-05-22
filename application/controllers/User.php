<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'User',
            'subtitle' => '',
            'page' => 'v_user'//file view di folder view
        );
        $this->load->view('v_template',$data, false); //template
    }
   
}