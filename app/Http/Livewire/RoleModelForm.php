<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoleModelForm extends Component
{

    public $role;

    protected $rules = [
        'role.name' => 'required|min:3',
        'role.status' => 'nullable|boolean',
    ];

    public function mount(\App\Models\Role $role)
    {
        $this->role = $role;
    }

    public function save()
    {
        $this->validate();

        $this->role->save();

        // check if the model is new
        $action = $this->role->wasRecentlyCreated ? 'created' : 'updated';

        session()->flash('message', 'Role successfully ' . $action);

        return redirect()->route('roles.index');
    }

    public function render()
    {
        return view('livewire.role-model-form');
    }
}
