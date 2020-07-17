<?php

use Illuminate\Support\Facades\Route;

use App\{
    User,
    Store,
    Product,
};

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function() {
    //$product = Product::all(); //Select * from products

    //$user = App\User::find(1);
    //$user->name = 'Milu';
    //$user->save();

    //return \App\User::all();
    //return \App\User::find(3);
    //return \App\User::where('name', 'Milu')->get();

    //Mass Assignment

    /*$user = \App\User::create([
        'name' => "Lucas Campanelli",
        'email' => "lucasoucam@hotmail.com",
        'password' => bcrypt("12345678"),
    ]);*/
    
    //Mass Update

    /*$user = \App\User::find(41);
    $user = $user->update([
        'name' => "Lucas Campanelli de Souza"
    ]);
    dd($user);*/
    
    return \App\User::all();
});
