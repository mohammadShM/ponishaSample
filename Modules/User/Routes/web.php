<?php

use Modules\User\Http\Livewire\UserIndex;

Route::prefix('admin/users')->group(function() {
   // Route::get('/', 'UserController@index');
    Route::get('/', UserIndex::class)->name('user.index');
});
