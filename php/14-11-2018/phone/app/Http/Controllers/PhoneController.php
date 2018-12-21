<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
class PhoneController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('phone', ['users' => $users]);
    }
}
function create(){
    return view('user.create');
}
/// khi chúng ta thêm người dùng chúng ta phải điền đầy đủ thông tin rồi request lên máy chủ
function store(Request $request){
    $User = new User;
    $User->name = $request->name;
    $User->number = $request->number;
    $User->save();
    return redirect()->route('user.store');
}
//muốn xóa người dùng chúng ta chỉ cần có id người đó chúng ta có thể xóa hết toàn bộ nội dung của người đó
function destroy($id){
    // $users = User::find($id);
    // $users->delete();
    $users= User::destroy($id);
    return redirect('phone');
}
// muốn chỉnh sửa người dùng chúng ta cần vào lại trang chủ rồi chỉnh sủa hoặc thêm những thứ cần thiết
function edit($id){
    $user = User::find($id);
    return view('edit', ['user' => $user]);
}
/// update là chúng ta cập nhật thông tin  .. phải điền dầy đủ thông tin để chúng ta cho vào danh sách người dùng muốn
function update(Request $request, $id){
    $user = User::find($id);
    $User->name = $request->name;
    $User->number = $request->number;
    $user->save();
    return redirect()->route('user.index');
}