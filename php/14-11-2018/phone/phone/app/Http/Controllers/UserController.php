<?php

namespace App\Http\Controllers;
use App\phones;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index(){
    //     $users = User::all();
    //     return view('users.index', ['users'=> $users]);
    // }
    // public function show($id){
    //     $user = User::find($id);
    //     return view('users.show', ['user'=> $user]);
    // }
    // public function create(){
    //     return view('users.create');
    // }
    // public function store(Request $request){
    //     User::create([
    //         'name' => $request -> name,
    //     ]);
    //     return redirect()->route('users.index');
    // }
    // public function destroy($id){
    //     User::destroy($id);
    //     return redirect()->route('users.index');
    // }
    // public function edit($id){
    //     $user = User::find($id);
    //     return view('users.edit', ['user' => $user]);
    // }
    // public function update(Request $request, $id){
    //     $user = User::find($id);
       
    //     $user -> update([
    //         'name' => $request -> name,
           
    //     ]);
    //     return redirect()->route('users.show', $id);
    // }
    public function index()
    {
        $phones = Phone::all();
        return view('phone.index', ['phone' => $phones]);
    }
    public function show($id){
        $phone = Phone::find($id);
        return view('phone.show', ['phone'=> $phone]);
    }
    public function create(){
        return view('phone.create');
    }
    public function store(Request $request){
        Phone::create([
            'number' => $request -> number,
            'user_id' => $request -> user_id,
        ]);
        return redirect()->route('phone.index');
    }
    public function destroy($id){
        
        Phone::destroy($id);
        return redirect()->route('phone.index');
    }
    public function edit($id){
        $phone = Phone::find($id);
        return view('phone.edit', ['phone' => $phone]);
    }
    public function update(Request $request, $id){
        $phone = Phone::find($id);
        $phone -> update([
            'number' => $request -> number,
            'user_id' => $request -> user_id,
        ]);
        return redirect()->route('phone.show', $id);
    }
}
