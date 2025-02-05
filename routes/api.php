<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/root", function () {
    return "Hello World";
});

// Route::get("/test", [TestController::class, "index"]);

Route::get("/todos", [TodoController::class, "showAll"]);