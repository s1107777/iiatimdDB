<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Series;

class SeriesController extends Controller
{
    public function movies(){
        return Series::all(); 
    }
}
