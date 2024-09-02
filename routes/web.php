<?php

use App\Livewire\ContactUs;
use App\Livewire\SingleUser;
use App\Livewire\UserForm;
use App\Livewire\UserList;
use Illuminate\Support\Facades\Route;

Route::get('/', UserList::class);
Route::get('/users', UserList::class);
Route::get('/users/create', UserForm::class);
Route::get('/users/{user}', SingleUser::class);
Route::get('/contact', ContactUs::class);
