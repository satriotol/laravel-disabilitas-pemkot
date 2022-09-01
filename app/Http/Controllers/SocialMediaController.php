<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    public function index(){
        return view('socialmedia.index');
    }
}
