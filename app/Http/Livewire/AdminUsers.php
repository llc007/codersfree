<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminUsers extends Component
{
    public function render()
    {

        $users = User::paginate(8);
        return view('livewire.admin-users',compact('users'));
    }
}
