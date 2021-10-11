<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;
use App\Models\BloodPressureObservation;

class BloodPressure extends Component
{
    public $patientId, $systolic, $diastolic;
 
    protected $rules = [
        'patientId' => 'required',
        'systolic' => 'required',
        'diastolic' => 'required'
    ];

    public function saveObservation()
    {
        $validatedData = $this->validate();
 
        BloodPressureObservation::create([
            'patientId' => $this->patientId,
            'systolic' => $this->systolic,
            'diastolic' => $this->diastolic,
        ]);

        session()->flash('message', 'Observation saved successfully.');

        return redirect()->route('home');
    }
    public function render()
    {
        $patients = Patient::all();
        return view('livewire.blood-pressure', ['patients' => $patients]);
    }
}
