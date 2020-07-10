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

    // ファイルのダウンロード
    public function outFile()
    {
        return response()
                ->download('C:/Data/data_log.csv', 'download.csv', ['Content-Type' => 'text/csv']);
    }

    // 生成したデータをダウンロード
    public function outCsv()
    {
        return response()
                ->streamDownload(function() {
                    print(
                        "1,2019/10/1,123\n".
                        "2,2019/10/2,116\n".
                        "3,2019/10/3,98\n".
                        "4,2019/10/4,102\n".
                        "5,2019/10/5,134\n"
                    );
                }, 'download.csv', ['Content-Type' => 'text/csv']);
    }

    // 指定されたファイルを出力してブラウザに描画
    public function outImage()
    {
        return response()
                ->file('C:/Data/wings.png', ['Content-Type' => 'image/png']);
    }

    // リダイレクト処理
    public function redirectBasicr()
    {
        return redirect('hello/list');
    }
}
