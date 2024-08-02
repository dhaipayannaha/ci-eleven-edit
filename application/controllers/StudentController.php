<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->model('StudentModel');
    //     $student = $this->StudentModel->student_data();
    //     echo "student name :" . $student;
	// }


	// public function index()
	// {
	// 	$this->load->model('StudentModel');
    //     $student = new StudentModel;
    //     $student = $student->Student_data();
    //     echo "student name :" . $student;
	// }


    public function index()
	{
		$this->load->model('StudentModel','stud');
        $student = $this->stud->student_data();
        // $student_class = $this->stud->student_class();
        echo "student name :" . $student;
	}


    public function show($id)
	{
		// echo $id;
        $this->load->model('StudentModel','stud');
        $select_stud = $this->stud->student_show($id);
        echo $select_stud;
	}

}