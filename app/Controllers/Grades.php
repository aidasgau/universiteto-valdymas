<?php

namespace App\Controllers;

class Grades extends BaseController
{
    public function __construct() {
        $this->grades_model = model(GradesModel::class);    
        $this->enrollments_model = model(EnrollmentsModel::class);
    }

    public function index()
    {
        $data = [
            'title' => 'Grades',
            'grades' => $this->grades_model->findAll(),
        ];
        return view('grades', $data);
    }
    public function add()
{
    helper('form');
    $data = [
        'title' => 'Add Grade',
        'enrollments' => $this->enrollments_model->findAll(),
    ];

    if ($this->request->is('post')) {
        $form_data = [
            'EnrollmentID' => $this->request->getPost('EnrollmentID', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Grade' => $this->request->getPost('Grade', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Date' => $this->request->getPost('Date', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        ];
        $this->grades_model->insert($form_data);
        return redirect()->to('grades');
    }

    return view('grade', $data);
}


public function edit($EnrollmentID)
{
    helper('form');
    $data = [
        'title' => 'Edit Grade',
        'grade' => $this->grades_model->query("SELECT * FROM grades WHERE EnrollmentID = $EnrollmentID")->getRow(),
        'enrollments' => $this->enrollments_model->findAll(),
    ];

    if ($this->request->is('post')) {
        $form_data = [
            'EnrollmentID' => $this->request->getPost('EnrollmentID', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Grade' => $this->request->getPost('Grade', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Date' => $this->request->getPost('Date', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        ];
        $this->grades_model->update($EnrollmentID, $form_data);
        return redirect()->to('grades');
    }
    return view('grade', $data);
}



    public function delete($GradeID)
    {
        if (is_numeric($GradeID)) {
            $this->grades_model->delete($GradeID);
        }
        
        return redirect()->to('grades');
    }
}
