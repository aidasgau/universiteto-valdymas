<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper('html');
        $data = [
            'title' => 'Home',
            'db_svg_path' => img('db_model.svg'),
            'sql_code' => file_get_contents('universityproject.sql')
        ];
        
        return view('home', $data);
    }
}
