<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller {

    public function index() {
        $data = [];
        $data['laravel_5'] = 'Laravel 5';
        $data['about'] = 'About';
        
        return view('welcome', $data);
    }

}
