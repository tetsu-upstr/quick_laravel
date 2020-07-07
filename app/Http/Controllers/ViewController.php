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

    public function unless()
    {
        return view('view.unless', [
            // 乱数を取得
            'random' => random_int(0, 100)
        ]);
    }

    public function isset()
    {
        return view('view.isset', [

            'msg' => 'hello world!'
        ]);
    }

    public function switch()
    {
        return view('view.switch', [
            // 1〜5の乱数を取得
            'random' => random_int(1, 5)
        ]);
    }

    public function while()
    {
        return view('view.while', [
            'i' => 0
        ]);
    }
}
