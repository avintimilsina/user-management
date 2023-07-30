<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class EditForm extends Component
{
        public User $user;
    
        public function render()
        {
            $queryParams = (object) request()->query();
            $this->user = User::where('id', $queryParams->id)->first();

            return view('livewire.edit-form', [
                'user' => $this->user,
            ]);
        }
}
