<?php
use Illuminate\Support\Facades\Route;

Route::get('/hello/{name}', function (string $name) {
    return "Hallo, " . e($name) . "!";
});
