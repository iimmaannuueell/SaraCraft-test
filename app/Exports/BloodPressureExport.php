<?php

namespace App\Exports;

use App\Models\BloodPressureObservation;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class BloodPressureExport implements FromQuery
{
    use Exportable;

    public function __construct($patientId)
    {
        $this->patientId = $patientId;
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return BloodPressureObservation::all();
        return BloodPressureObservation::query()->where('patienId', $this->patientId);
    }
}
