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

Route::get('/', function () {
    return view('welcome');
});
Route::get('lab1', function () {
    $name="Mohand";
    return view('lab1',compact('name'));
});

Route::post('lab1', function () {
    $name="Mohand";
    if(isset($_POST['submit']))
    $name=$_POST['name'];

    return view('lab1',compact('name'));
});

Route::get('tasks',function(){
    $tasks=['task1','task2','task3'];
    return view('tasks',compact('tasks'));

});

