<?php

use Modules\User\Http\Livewire\UserAdd;
use Modules\User\Http\Livewire\UserEdit;
use Modules\User\Http\Livewire\UserIndex;

Route::prefix('admin/users')
    //->middleware('auth')
    ->group(function () {
    // Route::get('/', 'UserController@index');
    Route::get('/', UserIndex::class)->name('user.index');
    Route::get('/add', UserAdd::class)->name('user.add');
    Route::get('/edit/{user}', UserEdit::class)->name('user.edit');
});
