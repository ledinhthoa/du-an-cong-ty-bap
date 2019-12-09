<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Post;
use App\User;
class ManageController extends Controller
{
    public function getuserslist(){
        $post= Post::paginate(4);
        return view('page.users_list',compact("post"));
    }
    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa khách hàng thành công');

        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('userslist');
    }

    public function edit($id){
        $poste = Post::findOrFail($id);
        return view('page.post_edit', compact('poste'));
    }
    public function update(Request $request, $id){
        $post= Post::findOrFail($id);
        $post->title    = $request->input('title');
        $post->area   = $request->input('area');
       $post->price    = $request->input('price');
        $post->address  = $request->input('address');


        $post->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật khách hàng thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('userslist');
    }
}
