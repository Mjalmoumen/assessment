<?php

use Illuminate\Support\Facades\Route;
use Mohammed\MyPackageModule\Http\Controllers\MyPackageController;

Route::get('/searching', [MyPackageController::class, 'search'])
    ->name('mypackage.search');;