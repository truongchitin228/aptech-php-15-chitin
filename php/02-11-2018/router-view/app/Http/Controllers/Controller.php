<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    // public function index()
    // {
    //     $users = DB::table('users')->get();

    //     return ($users);
    // }
    // {
    //     $users = DB::table('users')->get();
    //     // $roles = DB::table('roles')->get();
    //     return view('welcome', ['users' => $users]);
    // }
    public function index()
    {
        $users = DB::table('users')->get();
        // dd($users);
        return view('mvc1', ['users' => $users]);
    }
}


