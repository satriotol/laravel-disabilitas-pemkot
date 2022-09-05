<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected function index()
    {
       $batas = 5;
       $jumlah_user = User::count();
       $user = User::orderBy('id', 'asc')->paginate($batas);
       $no = 0;
       return view('user.index', compact('user', 'no', 'jumlah_user'));
    }



}
