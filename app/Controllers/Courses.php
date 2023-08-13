<?php

namespace App\Controllers;

class Courses extends BaseController
{
    public function __construct() {
        $this->courses_model = model(CoursesModel::class);    
        $this->instructors_model = model(InstructorsModel::class);
    }

    public function index()
    {
        $data = [
            'title' => 'Courses',
            'courses' => $this->courses_model->findAll(),
        ];
        return view('courses', $data);
    }

    public function add()
{
    helper('form');
    $data = [
        'title' => 'Add Course',
        'instructors' => $this->instructors_model->findAll(),
    ];

    if ($this->request->is('post')) {
        $form_data = [
            'CourseName' => $this->request->getPost('CourseName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'InstructorID' => $this->request->getPost('InstructorID', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Faculty' => $this->request->getPost('Faculty', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'StartDate' => $this->request->getPost('StartDate', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'EndDate' => $this->request->getPost('EndDate', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Credits' => $this->request->getPost('Credits', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        ];
        $this->courses_model->insert($form_data);
        return redirect()->to('courses');
    }

    return view('course', $data);
}


    public function edit($CourseID)
{
    helper('form');
    $data = [
        'title' => 'Edit Course',
        'course' => $this->courses_model->find($CourseID),
        'instructors' => $this->instructors_model->findAll(),
    ];

    if ($this->request->is('post')) {
        $form_data = [
            'CourseName' => $this->request->getPost('CourseName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'InstructorID' => $this->request->getPost('InstructorID', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Faculty' => $this->request->getPost('Faculty', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'StartDate' => $this->request->getPost('StartDate', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'EndDate' => $this->request->getPost('EndDate', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'Credits' => $this->request->getPost('Credits', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        ];
        $this->courses_model->update($CourseID, $form_data);
        return redirect()->to('courses');
    }
    return view('course', $data);
}


    public function delete($CourseID)
    {
        if (is_numeric($CourseID)) {
            $this->courses_model->delete($CourseID);
        }
        
        return redirect()->to('courses');
    }
}
