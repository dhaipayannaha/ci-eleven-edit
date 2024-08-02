<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {

	public function index()
	{
        $this->load->view('template/header');

		
		$this->load->model('EmployeeModel');

		// $data['employee'] = $this->EmployeeModel->getEmployee();
        // $this->load->view('frontend/employee', $data);

		$employee = $this->EmployeeModel->getEmployee();
		$this->load->view('frontend/employee', ['employee'=>$employee]);

        $this->load->view('template/footer');
		
	}

	public function create()
	{
        $this->load->view('template/header');
		$this->load->view('frontend/create');
        $this->load->view('template/footer');
	}

	// $autoload['helper'] = array('url','form');
	// $autoload['libraries'] = array('database','form_validation');

	public function store()
	{

		    $this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Phone Number', 'required');
			$this->form_validation->set_rules('phone', 'Email', 'required');

			if($this->form_validation->run())
			{
				$data = [
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email')
				];

				$this->load->model('EmployeeModel', 'emp');
				$this->emp->insertEmployee($data);
				redirect(base_url('employee'));

			}
			else
			{
				$this->create();
				// redirect(base_url('employee/add'));
			}
        
	}

	public function edit($id)
	{
		$this->load->view('template/header');
		$this->load->model("EmployeeModel");
		$data['employee'] = $this->EmployeeModel->editEmployee($id);

		$this->load->view('frontend/edit', $data);
		$this->load->view('template/footer');
	}
}
