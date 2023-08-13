<?php

namespace App\Controllers;

class Instructors extends BaseController
{
    public function __construct() {
        $this->instructors_model = model(InstructorsModel::class);    
    }

    public function index()
    {
        $data = [
            'title' => 'Instructors',
            'instructors' => $this->instructors_model->findAll(),
        ];
        return view('instructors', $data);
    }
    public function add()
    {
        helper('form');
        $data = [
            'title' => 'Add Instructor',
        ];
    
        if ($this->request->is('post')) {
            $form_data = [
                'FirstName' => $this->request->getPost('FirstName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'LastName' => $this->request->getPost('LastName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Email' => $this->request->getPost('Email', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Faculty' => $this->request->getPost('Faculty', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            ];
            $this->instructors_model->insert($form_data);
            return redirect()->to('instructors');
        }
    
        return view('instructor', $data);
    }
    
    
        public function edit($InstructorID)
    {
        helper('form');
        $data = [
            'title' => 'Edit Instructor',
            'instructor' => $this->instructors_model->find($InstructorID),
        ];
    
        if ($this->request->is('post')) {
            $form_data = [
                'FirstName' => $this->request->getPost('FirstName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'LastName' => $this->request->getPost('LastName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Email' => $this->request->getPost('Email', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'Faculty' => $this->request->getPost('Faculty', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            ];
            $this->instructors_model->update($InstructorID, $form_data);
            return redirect()->to('instructors');
        }
        return view('instructor', $data);
    }
    
    
        public function delete($InstructorID)
        {
            if (is_numeric($InstructorID)) {
                $this->instructors_model->delete($InstructorID);
            }
            
            return redirect()->to('instructors');
        }
    }
