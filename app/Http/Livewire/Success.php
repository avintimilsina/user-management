<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Success extends Component
{
    public User $user;

    public function render()
    {
        $queryParams = (object) request()->query();

        $this->user = User::where('id', $queryParams->id)->first();

        return view('livewire.success');
    }
}
