<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Faker\Test\Provider\Collection;
use Illuminate\Http\Request;

class ViewMain extends Controller
{
    public function index()
    {

        $data = (object) [
            'title' => 'Main View',
            'description' => 'This is the main view of the application.',
        ];

        return view('main.viewMain', ['data' => json_decode(json_encode($data, true))]);
    }
}
