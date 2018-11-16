<?php

namespace App\Http\Controllers;
use App\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
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

