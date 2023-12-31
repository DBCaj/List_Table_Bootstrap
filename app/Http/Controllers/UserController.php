<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  public function index()
  {
    $users = User::paginate(5);
    return view('layouts.list-table', compact('users'));
  }
}
