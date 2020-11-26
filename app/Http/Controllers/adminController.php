<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\user;
class adminController extends Controller
{
    // redirect add user

    // add new user
    public function addUser(Request $request){
        // validate data
        $this->validate($request,[
            'username' => 'required|min:6|max:20',
            'password' => 'required|min:8|max:20',
            're_password' =>'required|same:password'
        ],
        [
            'username.required|password.required|re_password' => 'Nhập đầy đủ thông tin',
            'password.min|password.max' => 'Độ dài mật khẩu từ 8 đến 20 kí tự',
            'username.min|username.max' => 'Độ dài username từ 6 đến 20 kí tự'
        ]);
        // get data from request post
        $user = $request->username;
        $pass = $request->password;
        $type = $request->type;
        // encode password
        $password = Hash::make($pass);
        // save user to database
        $addUser = new user();
        $addUser->username = $user;
        $addUser->password = $password;
        $addUser->type = $type;
        $addUser->save();
    }
    // update user 
    
}
