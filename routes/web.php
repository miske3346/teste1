<?php

use Illuminate\Support\Facades\Route;

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

Route::get('about', function () {
    return 'welcome to about page';
});


Route::get('about/{var}', function ($var) {
    return $var.' welcome to about page';
});

Route::view('/contact', 'contact',[
    'page_name' => 'page name= mohamed',
    'page_description' => 'page description ...laravel 8'
]);

Route::get('category/{id}', function ($id) {

        $cats =[
            '1' => 'programming',
            '2' => 'books',
            '3' => 'games'
        ];
   return view('category',[
       'the_id' => $cats[$id]?? "id is not found"
   ]);
});