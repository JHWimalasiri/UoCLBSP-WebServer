<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
//	public function index()
//	{
//		$this->load->view('add_roads');
//	}
    public function index()
    {
        $this->load->view('admin_search');
    }
//
//    public function index()
//    {
//        $this->load->view('add_polygon');
//    }
//
//    public function index()
//    {
//        $this->load->view('add_building');
//    }

}
