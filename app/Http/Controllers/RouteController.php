<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    // ルートパラメーターを受け取るための引数を用意
    public function param(int $id)
    {
        return 'id value:' . $id;
    }
}
