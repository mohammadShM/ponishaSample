<?php

namespace Modules\User\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UserIndex extends Component
{
    public function render(): Factory|View|Application
    {
        return view('user::livewire.user-index')
            ->extends(config('user.extends.admin'));
    }
}
