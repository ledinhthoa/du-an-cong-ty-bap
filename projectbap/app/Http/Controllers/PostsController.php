<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Post;
use App\User;
use Hash;

class PostsController extends Controller
{
    public function getindex(){
        $post= Post::paginate(4);

        return view('index',compact("post"));
    }
    public function getdetailpost(Request $req){
        $post=Post::where('id',$req->id)->first();

        return view("page.detailpost",compact('post'));

    }


    public function getLogin(){
        return view('page.login');
    }
    public function getSignin(){
        return view('page.dangki');
    }
    public function postSignin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'name'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phoneNumber = $req->phoneNumber;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
    }
    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:3|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);


//        $user = User::where([
//            ['email','=',$req->email],
//            ['status','=','1']
//        ])->first();

        if(Auth::attempt($credentials)){
            if(Auth::attempt($credentials)){

                return redirect(route('userslist')) ;
            }
            else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']);
        }}
    public function postLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }


    }
