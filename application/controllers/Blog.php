<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data = array(
            'title' => 'My Title'
        );
        $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
//        $this->load->view('blogview', $data);
        $string_data = $this->load->view('blogview', $data, true);
        echo $string_data;
	}

    public function blog_list($params1, $params2) {
        $this->load->model("blog_model", '', TRUE);
        $this->blog_model->get_last_ten_entries();
    }
}
