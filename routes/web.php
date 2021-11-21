<?php

use App\Models\Demande;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\Piece;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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











Route::get('/13', function () {
    // dd(User::find(3)->notifications[0]->data['demande']['pieces'][0]['compatible_with']);
    // dd(User::find(3)->notifications->where('type' , 'App\Notifications\NewDemandeAdded'));
    dd(Piece::find(3)->category);
    dd(Subcategory::find(1)->category);
});
Route::get('/12', function () {

    $data = ['user_id' =>1,
            'wilaya_id' =>1,
             'note' => 'note 1'];
    DB::beginTransaction();

    try {
        $demande = Demande::create($data);
        $demande->pieces()->attach([5]);
        if($demande)
        $demande->notify_interresters();
        DB::commit();
        dd($demande);
        // all good
    }
    catch (\Exception $e) {
        DB::rollback();
        // something went wrong
    }

    // $demande = Demande::find(2);

    // // $demande->pieces()->attach([1]);
});

Route::get('/my_demandes', function(){
    $marques = Marque::all();
    $modeles = Modele::all();
    $pieces = Piece::all();
    return view('admin.demandes.create_demande', compact( ['pieces' , 'marques', 'modeles' ]));
});

Route::get('show_demande/{id}', function ($id) {
        $demande = Demande::find($id);
        return view('admin.demandes.show_demande' , compact('demande'));
})->name('show_demande');



Route::post('/demande', function (Request $request) {
    $data = ['user_id' =>Auth::id(),
            'wilaya_id' =>1,
             'note' => $request->note];
        $demande = Demande::create($data);
        $demande->pieces()->attach($request->piece);
        if($demande)
            $demande->notify_interresters($request->modele, $request->marque);
        dd($demande);


    // $demande = Demande::find(2);

    // // $demande->pieces()->attach([1]);
})->name('create_demande');

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

            // Route::get('/my_demandes', function(){ return view('admin.demandes.create_demande');})->name('home');
            // Route::get('/my_demandes', ['DemandeController', 'new_demande'])->name('user.demande.store');
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
            Route::resource('nationalities', 'NationalityController');
            Route::resource('types', 'TypeController');
            Route::resource('categories', 'CategoryController');
            Route::resource('marques', 'MarqueController');
            Route::resource('modeles', 'ModeleController');



    });
});
