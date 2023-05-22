<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacher_deatil;
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
/*
Route::get('/', function () {
    return view('mobile_1_');
});
*/

Route::get('/',[teacher_deatil::class,'main_page']);
Route::get('/professor_details',[teacher_deatil::class,'teacher_detail']);

//semster
Route::get('/sem/{branch}',[teacher_deatil::class,'semster']);

//branch
Route::get('/branch',[teacher_deatil::class,'branch']);

//time_table
Route::get('/time_table/{branch}/{sem}',[teacher_deatil::class,'time_table']);

//search the rol number
Route::get('/search/{query}',[teacher_deatil::class,'query']);

//see mst record
Route::get('/mst/{query}',[teacher_deatil::class,'mst']);

//see mst query
Route::get('/mst_query',[teacher_deatil::class,'mst_query']);

//see team member
Route::get('/team',[teacher_deatil::class,'team']);

