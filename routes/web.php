<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// HTTP GET経由でのリクエストを処理する
Route::get('hello/view', 'HelloController@view');
Route::get('hello/list', 'HelloController@list');
Route::get('view/escape', 'ViewController@escape');
Route::get('view/if', 'ViewController@if');
Route::get('view/unless', 'ViewController@unless');
Route::get('view/isset', 'ViewController@isset');
Route::get('view/switch', 'ViewController@switch');
Route::get('view/while', 'ViewController@while');
Route::get('view/for', 'ViewController@while');
Route::get('view/foreach_assoc', 'ViewController@foreach_assoc');
Route::get('view/foreach_loop', 'ViewController@foreach_loop');
Route::get('view/master', 'ViewController@master');
Route::get('view/comp', 'ViewController@comp');
Route::get('route/param{id}', 'RouteController@param'); // 自由に値を埋め込める
// Route::get('route/param{id?}', 'RouteController@param'); // ?をつけるとURLがparamのみでもマッチ
// 受け取るパラメーターを?で任意とする場合、引数側で public function param(int $id = 1)と既定値を明示しておく
// Route::get('blog/{year}/{month}/{day}','...'); // 複数のパラメーター設定も可能

Route::get('view/ctrl', 'CtrlController@outJson');

Route::get('ctrl/middle', 'CtrlController@middle')->middleware(LogMiddleware::class); // ミドルウェアが複数の場合はカンマ区切りで追加する

// フォールバックルート :存在しないページ（ルート）が指定された場合に独自エラーページを表示する例 全てのルートの末尾に設定
Route::fallback(function(){ return view('route.error');});