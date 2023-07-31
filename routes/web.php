<?php

use App\Http\Livewire\EditForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/edit', [EditForm::class, 'render']);

Route::get('/success', function () {
    return view('result');
});

Route::get('/users', function () {
    return view('livewire.user-table');
});
