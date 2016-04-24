<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/dashboard',function() {

       $Image = Auth::user()->profile_pic;
       $type = 'image/jpeg';
       $rep = response($Image)->header('Content-Type', $type);

       return view('/dashboard', ['img' => $rep]);
     });
