<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentModel extends CI_Model {

	public function student_data()
	{
        $studclass = $this->student_class();
		return $stud_name = "Rohit. his class is: " . $studclass;
	}

	private function student_class()
	{
		return $stud_class = "BCA";
	}

    // paramiter pass model thing
    public function student_show($id)
    {
        if($id == '1')
        {
            return $result = "user 1";
        }
        elseif($id == '2')
        {
            return $result = "user 2";
        }

    }

    // view part view->demoPage.php
    public function demo()
    {
    return $title = "hello, i am a founder";

    }
	
}