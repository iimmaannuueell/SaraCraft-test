<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;

class CreatPatient extends Component
{
    public $firstname, $lastname, $phone, $gender, $email, $dob, $address;
 
    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'phone' => 'required|unique:patients',
        'gender' => 'required',
        'address' => 'required',
        'email' => 'required|email|unique:patients',
        'dob' => 'required',
    ];

    public function savePatient()
    {
        $validatedData = $this->validate();
 
        Patient::create($validatedData);

        session()->flash('message', 'Patient added successfully.');

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.creat-patient');
    }
}
