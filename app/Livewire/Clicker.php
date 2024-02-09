<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination;

    #[Rule('required|min:2|max:50')]
    public $name = '';

    #[Rule('required|email|unique:users')]
    public $email = '';

    #[Rule('required|min:2')]
    public $password = '';

    public function createNewUser()
    {

        $this->validate();

        // Alternate way to use validation
        // $this->validate([
        //     'name' => 'required|min:2|max:50',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:5'
        // ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->reset('name', 'email', 'password');

        session()->flash('success', 'Succesfully added to DB');
    }
    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.clicker', [
            'users' => $users,
        ]);
    }
}
