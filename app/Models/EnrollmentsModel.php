<?php

namespace App\Models;

use CodeIgniter\Model;

class EnrollmentsModel extends Model
{
    protected $primaryKey = 'EnrollmentID';
    protected $table = 'enrollments';
    protected $allowedFields = ['EnrollmentID', 'StudentID', 'CourseID', 'Status', 'Date'];
    protected $returnType = 'object';

    protected $validationRules = [
        'StudentID' => 'required',
        'CourseID' => 'required',
        'Status' => 'required',
        'Date' => 'required',
    ];
}