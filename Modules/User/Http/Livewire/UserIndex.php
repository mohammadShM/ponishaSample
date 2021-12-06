<?php /** @noinspection PhpMissingFieldTypeInspection */

namespace Modules\User\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{

    use WithPagination;

    public $search;
    protected $queryString = ['search'];
    protected string $paginationTheme = 'bootstrap';
    public bool $readyToLoad = false;

//    public User $user ;
//
//    public function mount()
//    {
//        $this->user = new User();
//    }

    public function loadUser()
    {
        $this->readyToLoad = true;
    }

    // for manage status in user
    public function updateStatusToDisable($id)
    {
        $user = User::query()->find($id);
        $user->update([
            'status' => 0,
        ]);
        // for call event in livewire and use in liwevire:load event  for work in javascript
        $this->emit('toast', 'success', 'وضعیت کاربر با موفقیت غیر فعال شد');
    }

    // for manage status in user
    public function updateStatusToEnable($id)
    {
        $user = User::query()->find($id);
        $user->update([
            'status' => 1,
        ]);
        // for call event in livewire and use in liwevire:load event  for work in javascript
        $this->emit('toast', 'success', 'وضعیت کاربر با موفقیت فعال شد');
    }

    // for manage email verification in user
    public function updateEmailToDisable($id)
    {
        $user = User::query()->find($id);
        $user->update([
            // becouse email_verified_at is time stamp type in database
            'email_verified_at' => Carbon::now(),
        ]);
        // for call event in livewire and use in liwevire:load event  for work in javascript
        $this->emit('toast', 'success', 'ایمیل کاربر با موفقیت تایید شد');
    }

    // for delete user
    public function deleteUser($id)
    {
        $user = User::query()->find($id);
        $user->delete();
        // for call event in livewire and use in liwevire:load event  for work in javascript
        $this->emit('toast', 'success', 'کاربر مورد نظر با موفقیت حذف شد');
    }

    public function render(): Factory|View|Application
    {
        $users = $this->readyToLoad ? User::query()->where('name', 'LIKE', "%$this->search%")
            ->orWhere('last_name', 'LIKE', "%$this->search%")
            ->orWhere('username', 'LIKE', "%$this->search%")
            ->orWhere('mobile', 'LIKE', "%$this->search%")
            ->orWhere('email', 'LIKE', "%$this->search%")
            ->orWhere('IRIB', 'LIKE', "%$this->search%")
            // ->orWhere('id', $this->search)->latest()->paginate(20)
            ->orWhere('id', $this->search)->orderBy('id', 'DESC')->paginate(20)
            : [];
        return view('user::livewire.user-index', compact('users'))
            ->extends(config('user.extends.admin'));
    }
}
