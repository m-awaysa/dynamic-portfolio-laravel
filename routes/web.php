<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\skillController;
use App\Http\Controllers\admin\ContactInfoController;
use App\Http\Controllers\Public\ListContactInfoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Public\PortfolioController;

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

//admin projects route 
Route::get('/project/list',[ProjectController::class,'index'])->name('project.list');
Route::get('/project/add',[ProjectController::class,'viewAdd'])->name('project.add');
Route::post('/project/add',[ProjectController::class,'store'])->name('project.add');
Route::get('/project/delete/{project}',[ProjectController::class,'delete'])->name('project.delete');
Route::get('/project/edit/{project}',[ProjectController::class,'viewEdit'])->name('project.edit');
Route::post('/project/edit/{project}',[ProjectController::class,'edit'])->name('project.edit');

//admin skill route(about me)
Route::get('/skill/list',[skillController::class,'index'])->name('skill.list');
Route::get('/skill/add',[skillController::class,'viewAdd'])->name('skill.add');
Route::post('/addskill',[skillController::class,'store'])->name('addskill');
Route::get('/skill/delete/{skill}',[skillController::class,'delete'])->name('skill.delete');
Route::get('/skill/edit/{skill}',[skillController::class,'viewEdit'])->name('skill.edit');
Route::post('/skill/edit/{skill}',[skillController::class,'edit'])->name('skill.edit');


//admin contact info route
Route::get('/contact_info/list',[ContactInfoController::class,'index'])->name('contact_info.list');
Route::get('/contact_info/add',[ContactInfoController::class,'viewAdd'])->name('contact_info.add');
Route::post('/contact_info/add',[ContactInfoController::class,'store'])->name('contact_info.add');
Route::get('/contact_info/edit/{contact_info}',[ContactInfoController::class,'viewEdit'])->name('contact_info.edit');
Route::post('/contact_info/edit/{contact_info}',[ContactInfoController::class,'edit'])->name('contact_info.edit');
Route::get('/contact_info/delete/{contact_info}',[ContactInfoController::class,'delete'])->name('contact_info.delete');



//puplic info list
Route::post('/contactInfo',[ListContactInfoController::class,'sent'])->name('contact_infos');
// login
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'authenticate'])->name('login');
//portfolio
Route::get('/portfolio',[PortfolioController::class,'index'])->name('portfolio');



