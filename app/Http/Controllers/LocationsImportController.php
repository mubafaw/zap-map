<?php

namespace App\Http\Controllers;

use App\Imports\LocationsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class LocationsImportController extends Controller 
{
    public function import() 
    {
        Excel::import(new LocationsImport, 'app/Imports/data/data.csv');
        
        return redirect('/')->with('success', 'All good!');
    }
}