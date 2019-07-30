<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{

function index()
{
  $data['title'] = 'Dashboard';
    $this->load->view('header', $data);
    $this->load->view('admin/index');
    $this->load->view('footer');

}
}
