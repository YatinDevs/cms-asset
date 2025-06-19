<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactFormController;

Route::middleware('api')->group(function () {
    Route::post('/contactform', [ContactFormController::class, 'store']);
});
