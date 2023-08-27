<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return response('<h1>hello</h1>');
// });


// Route::get('/post/{id}', function ($id) {

//     // dd($id);
//     // ddd($id);
//     return response('Post'. $id);
// })->where('id', '[0-9]+');
// // /api/posts
// Route::get('/posts', function() {
//     return response()->json(['posts'=>[['title'=>'post1']]]);
// });


// Route::get('/post/{id}', function ($id) {

//     // dd($id);
//     // ddd($id);
//     return response('Post'. $id);
// })->where('id', '[0-9]+');
// // /api/posts
// Route::get('/posts', function() {
//     return response()->json(['posts'=>[['title'=>'post1']]]);
// });


Route::get('/', function () {
    return view('listings', ['heading' => 'Latest Listings', 
'listings' => [
    [
        'id' => 1, 
        'title' => 'Listing1',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, ut!',
    ],    
    [
        'id' => 2, 
        'title' => 'Listing2',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, ut!',
    ],
]
]);

});