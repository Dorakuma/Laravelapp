<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
  public function index()
  {
    $data = [
      ['name'=>'山田太郎', 'mail'=>'taro@yamada'],
      ['name'=>'田中はなこ', 'mail'=>'hanako@hoge'],
      ['name'=>'鈴木さちこ', 'mail'=>'suzuki@huga']
    ];
    return view('hello.index', ['data'=>$data]);
  }

  
}