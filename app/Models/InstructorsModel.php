<?php

namespace App\Models;

use CodeIgniter\Model;

class InstructorsModel extends Model
{
    protected $primaryKey = 'InstructorID';
    protected $table = 'instructors';
    protected $allowedFields = ['FirstName', 'LastName', 'Email', 'Faculty'];
    protected $returnType = 'object';

    protected $validationRules = [
        'FirstName' => 'required',
        'LastName' => 'required',
        'Email' => 'required',
        'Faculty' => 'required',
    ];
}