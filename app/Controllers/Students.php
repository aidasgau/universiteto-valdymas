<?php

namespace App\Controllers;

class Students extends BaseController
{
    public function __construct() {
        $this->students_model = model(StudentsModel::class);    
    }

    public function index()
    {
        $data = [
            'title' => 'Students',
            'students' => $this->students_model->findAll(),
        ];
        return view('students', $data);
    }
    public function add()
    {
        helper('form');
        $data = [
            'title' => 'Add Student',
        ];
    
        if ($this->request->is('post')) {
            $form_data = [
                'FirstName' => $this->request->getPost('FirstName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'LastName' => $this->request->getPost('LastName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Email' => $this->request->getPost('Email', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'DateOfBirth' => $this->request->getPost('DateOfBirth', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Address' => $this->request->getPost('Address', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Program' => $this->request->getPost('Program', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Year' => $this->request->getPost('Year', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'GPA' => $this->request->getPost('GPA', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            ];
            $this->students_model->insert($form_data);
            return redirect()->to('students');
        }
        return view('student', $data);
    }
    
    
        public function edit($StudentID)
    {
        helper('form');
        $data = [
            'title' => 'Edit Student',
            'student' => $this->students_model->find($StudentID),
        ];
    
        if ($this->request->is('post')) {
            $form_data = [
                'FirstName' => $this->request->getPost('FirstName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'LastName' => $this->request->getPost('LastName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Email' => $this->request->getPost('Email', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'DateOfBirth' => $this->request->getPost('DateOfBirth', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Address' => $this->request->getPost('Address', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Program' => $this->request->getPost('Program', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Year' => $this->request->getPost('Year', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'GPA' => $this->request->getPost('GPA', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            ];
            $this->students_model->update($StudentID, $form_data);
            return redirect()->to('students');
        }
        return view('student', $data);
    }
    
    
        public function delete($StudentID)
        {
            if (is_numeric($StudentID)) {
                $this->students_model->delete($StudentID);
            }
            
            return redirect()->to('students');
        }
    }
