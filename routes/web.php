<?php

use App\Livewire\SingleUser;
use App\Livewire\UserForm;
use App\Livewire\UserList;
use Illuminate\Support\Facades\Route;

Route::get('/', UserForm::class);
Route::get('/users', UserList::class);
Route::get('/users/{user}', SingleUser::class);
