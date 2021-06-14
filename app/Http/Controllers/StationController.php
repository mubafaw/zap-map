<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;

class StationController extends Controller
{
    public function show($latitude, $longitude, $radius)
    {   
        $stations = Station::all();
        
        $data = [];
        foreach($stations as $station) {
            $distance = $this->calculateDistancetoStation($latitude, $longitude, $station->latitude, $station->longitude);
            if($distance <= $radius) {
                $data[] = [
                    'id' => $station->id,
                    'Station Name' => $station->location,
                    'Distance(miles)' => round($distance, 2)
                ];
            }
        }
        return response()->json($data);
    }

    public function calculateDistancetoStation($latitudeFrom, $longitudeFrom, $latitudeTo,  $longitudeTo)
    {
        $long1 = deg2rad($longitudeFrom);
        $long2 = deg2rad($longitudeTo);
        $lat1 = deg2rad($latitudeFrom);
        $lat2 = deg2rad($latitudeTo);

        //Haversine Formula
        $dlong = $long2 - $long1;
        $dlati = $lat2 - $lat1;

        $val = pow(sin($dlati/2),2)+cos($lat1)*cos($lat2)*pow(sin($dlong/2),2);

        $res = 2 * asin(sqrt($val));

        $radius = 3958.756;

        return ($res*$radius);
    }
}
