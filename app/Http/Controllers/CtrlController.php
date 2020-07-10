<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlContoller extends Controller
{
    //
    public function plain()
    {
        return response('hello world', 200)
                ->header('Content-Type', 'text/plain');
    }

    public function header()
    {
        return response ()
                ->view('ctrl.header', [ 'msg' => 'hello world'], 200)
                ->withHeaders([
                    'Content-Type' => 'text/plain',
                    'X-Powered-FW' => 'Laravel/7'
                ]);
    }

    public function outJson()
    {
        return response()
                ->json([
                    'name' => 'upstr, tetsu',
                    'sex' => 'male',
                    'age' => '35'
                ])
                ->withCallback('callback');
    }
}
