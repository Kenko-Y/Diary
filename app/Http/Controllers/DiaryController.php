<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ↑ require_once('別のファイル');のイケてる版

class DiaryController extends Controller
{
    public function index()
    {
        //dd("Hellp.Laravel");
        // Dump and Die関数：Laravelのデフォルト関数
        //                  var_dump()とdie()を組合せたもの
        //                  Laravel開発では必須ツール

        return view('diaries.index');
        // view関数はresources/views/内にあるファイルを取得する関数
        // view('フォルダ名')もしくは
        // view('フォルダ名.ファイル名')のように記述する
        // 例）  view('welcome')
        // 例）  view('diaries.edit')
        // ※ ファイル名は.bladeの前のみ
    }

    public function create()
    {
        return view('diaries.create');
    }
}
