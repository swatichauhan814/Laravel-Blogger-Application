<?php

namespace App\Http\Controllers;

#use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BloggerDashboard extends Controller
{
     public function get_profile_pic($user) {
       $Image = Auth::user()->profile_pic;
       return response($Image)->header('Content-Type', 'image/jpeg');
     }

     public function display_profile_pic() {
       $id = Auth::user()->id;
       $Image_url = "user/$id/profile-pic";
       return view('/dashboard', ['Image_url' => $Image_url]);
     }
}
