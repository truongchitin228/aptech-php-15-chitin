<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $Categories = Category::all();
        return view('newpost',['Categories' =>$Categories]);
    }
    function create(){
        return view('user.create');
    }

    function store(Request $request)
    {
        $post =post::create ([
        'title'=> $request->title,
       ' description'=>$request->description,
        'content'=>$request->content,
        ]);
        // $category = catego(ry::find($requet->category);
            $post->categories()->attach($requet->category);

        }
}