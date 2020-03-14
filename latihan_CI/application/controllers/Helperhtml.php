<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helperhtml extends CI_Controller {
    public function __Construct()
    {
        parent::__Construct();
        $this->load->helper('html'); //memanggil helper html
    }
    
    function index(){
        //memanggil v helper di folder views
        $this->load->view('v_helperhtml');
    }
	
}