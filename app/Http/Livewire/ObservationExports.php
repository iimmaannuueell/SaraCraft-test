<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;
use App\Exports\BloodPressureExport;
use Maatwebsite\Excel\Facades\Excel;

class ObservationExports extends Component
{
    public $patientId;

    protected $rules = [
        'patientId' => 'required'
    ];

    public function render()
    {
        $patients = Patient::all();
        return view('livewire.observation-exports', ['patients' => $patients]);
    }


    public function exportObservation()
    {
        $validatedData = $this->validate();

        return Excel::download(new BloodPressureExport($this->patientId), 'observation.xlsx');

    }
}
