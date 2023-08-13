<?php

namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model
{
    protected $primaryKey = 'CourseID';
    protected $table = 'courses';
    protected $allowedFields = ['CourseID', 'CourseName', 'InstructorID', 'Faculty', 'StartDate', 'EndDate', 'Credits'];
    protected $returnType = 'object';

    protected $validationRules = [
        'CourseName' => 'required',
        'InstructorID' => 'required',
        'Faculty' => 'required',
        'StartDate' => 'required',
        'EndDate' => 'required',
        'Credits' => 'required',
    ];
}