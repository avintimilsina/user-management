<?php

use App\Http\Livewire\AllUsers;
use App\Http\Livewire\EditForm;
use App\Http\Livewire\UserTable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/edit', [EditForm::class, 'render']);

Route::get('/success', function () {
    return view('result');
});

Route::get('/users', [AllUsers::class, 'allUsers']);
