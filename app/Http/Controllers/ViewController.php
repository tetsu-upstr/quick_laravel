<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function escape()
    {
        return view('view.escape', [
            'msg' => '<img src="https://wings.msn.to/image/wings.jpg" title="logo" /><p>welcome to WINGS!</p>'
        ]);
    }

    public function if()
    {
        return view('view.if', [
            // 乱数を取得
            'random' => random_int(0,100)
        ]);
    }
}
