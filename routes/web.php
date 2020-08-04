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

//創建controller方法 在terminal打php artisan make:controller PostsController  //PostsController是檔案名稱
Route::get('posts/{post}','PostsController@show');//@show意思是run show這個 function


// //http://127.0.0.1:8000/posts/second
// Route::get('/posts/{post}', function ($post) {
//     $posts =[
//         'first' => 'Hello is first',
//         'second' => 'Welcome Back'
//     ];
//     if (! array_key_exists($post,$posts)){
//         abort(404,'Sorry');
//     }
//     return view('post',[
//         'post' => $posts[$post]
//     ]);
// });


//post可以是任一值 打在網址上
// Route::get('/posts/{post}', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     //$name = request('name');
//     //return $name;
//     //return view('welcome');
//     return view('test',[
//         //'name'=>$name
//         'name'=>request('name')
//     ]);
// });
