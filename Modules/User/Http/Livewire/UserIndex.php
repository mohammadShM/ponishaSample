<?php

namespace Modules\User\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UserIndex extends Component
{
    public function render(): Factory|View|Application
    {
        $users  =  User::query()->latest()->get();
        return view('user::livewire.user-index',compact('users'))
            ->extends(config('user.extends.admin'));
    }
}
