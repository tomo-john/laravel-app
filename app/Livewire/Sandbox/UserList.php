<?php

namespace App\Livewire\Sandbox;

use Livewire\Component;
use App\Models\User;

class UserList extends Component
{
    public function render()
    {
        $users = User::all()
            ->map(fn ($u) => [
                'id' => $u->id,
                'name' => strtoupper($u->name),
            ]);

        return view('livewire.sandbox.user-list', [
            'users' => $users,
        ]);
    }
}
