<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\RoleController;
// use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/fr');

Route::group(['prefix'=>'{language}', 'where'=>['language'=>'[a-z]{2}']], function() {
    Route::get('/', function () {
        return view('welcome');
    });


    Auth::routes();

    Route::get('/home', ['App\Http\Controllers\HomeController', 'index'])->name('home');
    //User
    Route::group([
            'prefix' => 'user',
            'as' => 'user.',
            'namespace' => 'User',
            'middleware' => ['auth']
        ],
        function() {
            Route::get('/home', function(){ return view('user.home');})->name('home');
    });
    //Admin
    Route::group([
            'prefix' => 'admin',
            'as' => 'admin.',
            'namespace' => 'Admin',
            'middleware' => ['auth', 'admin']
        ],
        function() {
            Route::get('/home', function(){ return view('admin.home');})->name('home');
            Route::resource('roles', 'RoleController');
            Route::resource('users', 'UserController');
    });
});
