<?php
use App\Http\Controllers\SparepartController;

Route::resource('sparepart', SparepartController::class);


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
