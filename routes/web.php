<?php

use Illuminate\Support\Facades\Request;

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

Route::get('/index','StudentController@index' );

Route::get('/home', function () {
    return view('im.industrialmaster.home');
});

Route::get('/courses', function () {
    return view('im.industrialmaster.courses');
});
Route::get('/aboutus', function () {
    return view('im.industrialmaster.aboutus');
});

Route::get('/contacus', function () {
    return view('im.industrialmaster.contacus');
});
/*
Route::get('/students', function () {
    $students = \App\Student::all();
    return view('student.index')->with('students',$students);
});

Route::post('students/store',function(Request $request){
    $input = $request::all();
    \App\Student::create($input);
    return "Success";
});
*/
Route::resource('/students','StudentController');

//Route::get('students/edit','StudentController@edit');
/*
Route::get('students/show', function () {
    return view('student.show');
});

*/
