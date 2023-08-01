<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AllUsers extends Component
{
    public function allUsers()
    {
        return view('users', [
            'users' => User::all(),
        ]);
    }
}
