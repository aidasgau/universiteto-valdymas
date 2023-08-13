<?php

namespace App\Controllers;

class Enrollments extends BaseController
{
    public function __construct() {
        $this->enrollments_model = model(EnrollmentsModel::class);  
        $this->students_model = model(StudentsModel::class); 
        $this->courses_model = model(CoursesModel::class); 
    }

    public function index()
    {
        $data = [
            'title' => 'Enrollments',
            'enrollments' => $this->enrollments_model->findAll(),
        ];
        return view('enrollments', $data);
    }

    public function add()
{
    helper('form');
    $data = [
        'title' => 'Add Enrollment',
        'students' => $this->students_model->findAll(),
        'courses' => $this->courses_model->findAll(),
    ];

    if ($this->request->is('post')) {
        $form_data = [
            'StudentID' => $this->request->getPost('StudentID', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'CourseID' => $this->request->getPost('CourseID', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Status' => $this->request->getPost('Status', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Date' => $this->request->getPost('Date', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        ];
        $this->enrollments_model->insert($form_data);
        return redirect()->to('enrollments');
    }

    return view('enrollment', $data);
}


    public function edit($EnrollmentID)
{
    helper('form');
    $data = [
        'title' => 'Edit Enrollment',
        'enrollment' => $this->enrollments_model->find($EnrollmentID),
        'students' => $this->students_model->findAll(),
        'courses' => $this->courses_model->findAll(),
    ];

    if ($this->request->is('post')) {
        $form_data = [
            'StudentID' => $this->request->getPost('StudentID', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'CourseID' => $this->request->getPost('CourseID', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Status' => $this->request->getPost('Status', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Date' => $this->request->getPost('Date', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        ];
        $this->enrollments_model->update($EnrollmentID, $form_data);
        return redirect()->to('enrollments');
    }
    return view('enrollment', $data);
}


    public function delete($EnrollmentID)
    {
        if (is_numeric($EnrollmentID)) {
            $this->enrollments_model->delete($EnrollmentID);
        }
        
        return redirect()->to('enrollments');
    }
}

