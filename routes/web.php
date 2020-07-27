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
| Route::get -- Retorno
| Route::post -- Criação
| Route::put -- Atualização
| Route::patch -- Atualização
| Route::delete -- Remoção
| Route::options -- Retorno de cabeçalhos respondidos pela rota
|
*/

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

        /*Route::prefix('stores')->name('stores.')->group(function(){
    
            Route::get('/', 'StoreController@index')->name('index'); //O @ chama um método da classe
            Route::get('/create', 'StoreController@create')->name('create');
            Route::post('/store', 'StoreController@store')->name('store');
            Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
            Route::post('/update/{store}', 'StoreController@update')->name('update');
            Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
    
        });*/
    
        Route::resource('stores', 'StoreController');
        Route::resource('products', 'ProductController');
    
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); // ->middleware('auth');


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
    
    //Search a user store

    //$user = \App\User::find(4);
    
    //return $user->store()->count(); **quantas lojas o usuário possui**

    //return $user->store; //Um-para-um retorna um objeto único quando chamado o atributo //Muitos-para-muitos retorna uma collection

    //Search a store product
    $loja = \App\Store::find(1);
    
    //Como uma loja possui diversos produtos, pode-se usar o count no atributo
    //return $loja->products->count();

    // return $loja->products | return $loja->products()->where('id', 1)->get();

    //Search a store category 
    //$categoria = \App\Category::find(1);

    //$categoria->products;

    //Create a store for user
    /*$user = \App\User::find(10);
    $store = $user->store()->create([
        'nome' => 'Loja teste',
        'descricao' => 'Loja criada para testar o mass assignment do laravel',
        'telefone' => '11989774157',
        'celular' => '11854778452',
        'slug' => 'loja-teste'
    ]);
    
    dd($store);*/

    //Create a product for store
    /*$store = \App\Store::find(41);
    $product = $store->products()->create([
        'nome' => 'Mesa legal',
        'descricao' => 'Um produto muito legal para testar',
        'body' => 'Teste teste teste teste teste teste teste teste',
        'price' => 2999.90,
        'slug' => 'mesa-legal'
    ]);

    dd($product);*/

    //Create a category
    /*\App\Category::create([
        'name' => 'Games',
        'description' => null,
        'slug' => 'games'
    ]);
    \App\Category::create([
        'name' => 'Móveis',
        'description' => null,
        'slug' => 'moveis'
    ]);

    return \App\Category::all();*/

    //Add a product for a category
    //$product = \App\Product::find(55);
    //dd($product->categories()->attach([2]));
    //dd($product->categories()->detach([2])); //Remove
    //dd($product->categories()->sync([2])); //Adiciona itens que tem no array

    //$product = \App\Product::find(55);

    //return $product->categories;

});
