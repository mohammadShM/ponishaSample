<?php

use App\Http\Livewire\Admin\Dashboard\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/admin', Dashboard::class)->name('admin.dashboard');
