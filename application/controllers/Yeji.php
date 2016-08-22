<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yeji extends CI_Controller {

    public function index()
    {
        $this->load->view('yejiadd');
    }

    public function yeji()
    {
//        $price = $_POST['price'];
//        print_r($price);
    }
}