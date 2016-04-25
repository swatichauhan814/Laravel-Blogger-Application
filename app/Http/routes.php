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

Route::any('/user/{user}/profile-pic', 'BloggerDashboard@get_profile_pic');

Route::get('/dashboard', 'BloggerDashboard@display_profile_pic');
