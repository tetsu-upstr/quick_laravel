<?php

namespace App\Http\Middleware;

use Closure;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        file_put_contents('C:/Data/access.log', date('YmdH:i:s')."\n", FILE_APPEND);
        // 次のミドルウェアを呼び出し
        // ミドルウェアであることの条件はhandleメソッドを持つことだけ

        // ビュー変数を追加する
        $request->merge([
            'title' => 'quick_laravel',
            'auther' => 'upstr, tetsu'
        ]);

        // 最後にクロージャーを呼び出す
        return $next($request);
    }
}
