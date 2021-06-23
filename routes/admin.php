<?php

use App\http\controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class,'index']);
    
