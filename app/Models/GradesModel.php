<?php

namespace App\Models;

use CodeIgniter\Model;

class GradesModel extends Model
{
    protected $primaryKey = 'EnrollmentID';
    protected $table = 'grades';
    protected $allowedFields = ['EnrollmentID', 'Grade', 'Date'];
    protected $returnType = 'object';

    protected $validationRules = [
        'EnrollmentID' => 'required',
        'Grade' => 'required',
        'Date' => 'required',
    ];
}