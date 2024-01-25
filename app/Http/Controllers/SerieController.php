<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index ()
    {
        $series = Serie::all();
        
        return view("series", [
            "series" => $series,
        ]);   
    }

    // the $id is comming from the value that is in the users/{id}
    public function show ($id)
    {
        $serie = Serie::find($id);
        
        return view ("serie", [
            "serie" => $serie,
        ]);
    }
}
