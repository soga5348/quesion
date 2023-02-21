<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function get()
{
  $text = [
    'content' => '自由に入力してください',
  ];
  return view('middleware', $text);
}

public function post(Request $request)
{
  $content = $request->content;
  $text = [
    'content' => $content . 'と入力しましたね'
  ];
  return view('middleware', $text);
}
}
