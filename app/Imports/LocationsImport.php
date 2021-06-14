<?php

namespace App\Imports;

use App\Models\Station;
use Maatwebsite\Excel\Concerns\ToModel;

class LocationsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Station([
            'location'     => $row[0],
            'latitude'    => $row[1], 
            'longitude' => $row[2],
        ]);
    }
}
