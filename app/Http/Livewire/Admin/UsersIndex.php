<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UsersIndex extends Component
{
    use WithPagination;

    public $search ;
    public $role_id;
    public $cant = '10';

    public function mount()
    {
        $this->roles = Role::all();
    }

//    Para usar los estilos de bootstrap, debemos agregar la siguiente línea
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
            ->orWhere('email', 'LIKE', '%' . $this->search . '%')
            ->paginate($this->cant);

        if($this->role_id != ''){
            $users = User::role($this->role_id)->paginate(10);
        }


        return view('livewire.admin.users-index', compact('users'));
    }
}
