<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yeji extends CI_Controller {

    public function yeji_add()
    {
        $this->load->view('yejiadd');
    }
}