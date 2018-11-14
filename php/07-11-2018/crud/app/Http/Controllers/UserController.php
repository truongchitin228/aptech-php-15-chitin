<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    // xem tất cả thông tin người dùng
    public function index()
    {
        $users = User::all();
        return view('index' , ['users' => $users]);
    }
    // khi xem 1 thông tin người dung chúng ta phải bỏ id vào đó để máy nhận được thông tin của người đó 
    public function show($id)
    {    
        $users = User::find($id);
        return view('show',['user'=>$users]);
    }
    // public function
    function create(){
        return view('users.create');
    }
    /// khi chúng ta thêm người dùng chúng ta phải điền đầy đủ thông tin rồi request lên máy chủ
    function store(Request $request){
        $users = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->Password = $request->Password;
        $user->save();
        return redirect()->route('users.store');
    }
    //muốn xóa người dùng chúng ta chỉ cần có id người đó chúng ta có thể xóa hết toàn bộ nội dung của người đó
    function destroy($id){
        // $users = User::find($id);
        // $users->delete();
        $users= User::destroy($id);
        return redirect('index');
    }
    // muốn chỉnh sửa người dùng chúng ta cần vào lại trang chủ rồi chỉnh sủa hoặc thêm những thứ cần thiết
    function edit($id){
        $user = User::find($id);
        return view('edit', ['user' => $user]);
    }
    /// update là chúng ta cập nhật thông tin  .. phải điền dầy đủ thông tin để chúng ta cho vào danh sách người dùng muốn
    function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->Password = $request->Password;
        $user->save();
        return redirect()->route('user.index');
    }
    
}
