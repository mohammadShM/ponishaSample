<?php

namespace Modules\Core\Http\Livewire\User;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('core::livewire.user.index')
            ->extends(config('core.extends.admin'));
    }
}
