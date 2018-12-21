<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
      public function index()
      {
          $users = User::with('passport')->get()->toArray();
          return view('users.index', ['users' => $users]);
      }
      public function passportIndex()
      {
          $passports = Passport::with('user')->get()->toArray();
          dd($passports);
          return view('users.index', ['users' => $users]);
      }
}
