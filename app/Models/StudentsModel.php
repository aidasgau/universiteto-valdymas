<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    protected $primaryKey = 'StudentID';
    protected $table = 'students';
    protected $allowedFields = ['FirstName', 'LastName', 'Email', 'DateOfBirth', 'Address', 'Program', 'Year', 'GPA'];
    protected $returnType = 'object';

    protected $validationRules = [
        'FirstName' => 'required',
        'LastName' => 'required',
        'Email' => 'required',
        'DateOfBirth' => 'required',
        'Address' => 'required',
        'Program' => 'required',
        'Year' => 'required',
        'GPA' => 'required',
    ];
}