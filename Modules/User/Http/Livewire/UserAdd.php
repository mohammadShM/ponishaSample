<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */
/** @noinspection PhpMissingFieldTypeInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace Modules\User\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserAdd extends Component
{

    use WithFileUploads;

    public $profile_photo_path;
    public $cover;
    public User $user;
    protected $rules = [
        'user.name' => 'nullable',
        'user.last_name' => 'nullable',
        'user.username' => 'nullable',
        'user.email' => 'nullable',
        'user.mobile' => 'nullable',
        'user.password' => 'nullable',
        'user.city' => 'nullable',
        'user.state' => 'nullable',
        'user.country' => 'nullable',
        'user.about_us' => 'nullable',
    ];

    public function mount(): void
    {
        $this->user = new User();
    }

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function userForm()
    {
        $this->validate();
        dd($this->validate());
    }

    public function render()
    {
        return view('user::livewire.user-add')->extends(config('user.extends.admin'));
    }
}
