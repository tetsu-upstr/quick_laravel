<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index()
    {
        return 'hello world';
    }

    public function view()
    {
        $data = [
            'msg' => 'hello world'
        ];
        
        return view('hello.view', $data);
    }
}
