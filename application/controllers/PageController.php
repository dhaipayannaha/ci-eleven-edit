<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('about');
	}


	// pass paramiter 
	public function blog($blog_url = '')
	{
		echo "$blog_url";
		$this->load->view('blogView');
	}


	// view part view->demoPage.php




	// public function demo()
	// {
	// 	$data['title'] = "i am funda of web it";
	// 	$data['body'] = "welcome";
	// 	$this->load->view('demoPage', $data);
	// }



	public function demo()
	{
		$this->load->model('StudentModel');
		$title = $this->StudentModel->demo();
		$data['title'] = $title;
		$data['body'] = "welcome";
		$this->load->view('demoPage', $data);
	}
}