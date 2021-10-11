<?php

namespace App\Exports;

use App\Models\BloodPressureObservation;
use Maatwebsite\Excel\Concerns\FromCollection;

class BloodPressureExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BloodPressureObservation::all();
    }
}
