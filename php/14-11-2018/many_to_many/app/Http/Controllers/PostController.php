<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', ['posts' => $posts]);
    }
    public function show($id)
    {    
        $posts = Post::find($id);
        return view('show',['post'=>$posts]);
    }
    function create(){
        return view('user.create');
    }
    /// khi chúng ta thêm người dùng chúng ta phải điền đầy đủ thông tin rồi request lên máy chủ
    function store(Request $request){
        $post = new Post;
        $post->title = $request->title;
        $post->name = $requyest->name;
        $post->save();
        return redirect()->route('user.store');
    }
    //muốn xóa người dùng chúng ta chỉ cần có id người đó chúng ta có thể xóa hết toàn bộ nội dung của người đó
    function destroy($id){
        // $users = User::find($id);
        // $users->delete();
        $posts= Post::destroy($id);
        return redirect('onetomany');
    }
    // muốn chỉnh sửa người dùng chúng ta cần vào lại trang chủ rồi chỉnh sủa hoặc thêm những thứ cần thiết
    function edit($id){
        $post = Post::find($id);
        return view('edit', ['post' => $post]);
    }
    /// update là chúng ta cập nhật thông tin  .. phải điền dầy đủ thông tin để chúng ta cho vào danh sách người dùng muốn
    function update(Request $request, $id){
        $post= Post::find($id);
        $post->title = $request->title;
        $post->name = $request->name;
        $post->save();
        return redirect()->route('user.index');
    }
}
