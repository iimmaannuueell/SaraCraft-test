<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class CreatUser extends Component
{
    public $firstname, $lastname, $email, $role;

    public function render()
    {
        $roles = Role::all(); 
        return view('livewire.creat-user', ['roles' => $roles]);
    }


    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email|unique:patients',
        'role' => 'required',
    ];


    public function saveUser()
    {
        $validatedData = $this->validate();
 
        $user = User::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => Hash::make('password')
        ]);

        $user->roles()->attach($this->role);

        session()->flash('message', 'User added successfully.');

        return redirect()->route('home');
    }
}
