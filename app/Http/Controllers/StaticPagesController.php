<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class StaticPagesController extends Controller
{
    public function register()
    {
        return view('register');
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
           session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
           return  view('index');
           return redirect()->back()->withInput();
       }

    }

}
