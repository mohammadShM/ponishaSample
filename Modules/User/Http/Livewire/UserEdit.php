<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace Modules\User\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{

    public User $user;

    public function render()
    {
        $user = $this->user;
        return view('user::livewire.user-edit', compact('user'))
            ->extends(config('user.extends.admin'));
    }
}
