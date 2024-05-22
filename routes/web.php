<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontViewController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ContactController;


Route::get('/',[FrontViewController::class, 'Home']);
Route::get('about',[FrontViewController::class, 'about'])->name('about');
Route::get('service',[FrontViewController::class, 'service'])->name('service');
Route::get('singel/service',[FrontViewController::class, 'singelService'])->name('singelService');
Route::get('project',[FrontViewController::class, 'project'])->name('project');
Route::get('singel/project',[FrontViewController::class, 'singelProject'])->name('singelProject');
Route::get('pricing',[FrontViewController::class, 'pricing'])->name('pricing');
Route::get('faq',[FrontViewController::class, 'faq'])->name('faq');
Route::get('gallery',[FrontViewController::class, 'gallery'])->name('gallery');
Route::get('request/queate',[FrontViewController::class, 'requestQueat'])->name('requestQueate');
Route::get('contact',[FrontViewController::class, 'contact'])->name('contact');

Route::post('message',[ContactController::class, 'post_contact'])->name('post_contact');
Route::post('/confir/order', [RequestController::class, 'create_request_queat'])->name('Order');
