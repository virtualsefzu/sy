<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class StaticPagesController extends Controller
{
    public function download()
    {

    $files = './dow/1.zip';

    $name = basename($files);       // basename() 函数返回路径中的文件名部分。

        return response()->download($files, $name ,$headers = ['Content-Type'=>'application/zip;charset=utf-8']);
    }
    public function register()
    {
        return view('register');
    }
    public function index()
    {
        return view('index');
    }
      public function charts()
    {
        return view('charts');
    }
      public function create(Request $request)
    {

         $this->validate($request, [
         'email' => 'required|email',
         'password' => 'required|confirmed|min:1'
    ],[
    'required' => ':attribute 为必填项',
    'min' => ':attribute 长度不能小于1个字符',
    'email' => ':attribute 需要是邮箱',
    ],[
    'email' => '邮箱',
    'password' => '密码',
    ]);

          $user = User::create([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return view('index');
    }





     public function login(Request $request)
    {
        $credentials= $this->validate($request, [
         'email' => 'required|email|max:255',
         'password' => 'required']
    ,[
    'required' => ':attribute 不能为空',
    'email' => ':attribute 需要是邮箱',
    ],[
    'email' => '邮箱',
    'password' => '密码'
    ]);

        if (Auth::attempt($credentials)) {
           session()->flash('success', '欢迎回来！');
           return  view('index');
       } else {

           echo "<script>alert('很抱歉，您的邮箱和密码不匹配')</script>";
           return view('login');
       }

    }

}
