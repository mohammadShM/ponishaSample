<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', \App\Http\Livewire\Admin\Dashboard\Dashboard::class);
