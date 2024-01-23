<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function show($slug){
        $serie = file_get_contents(__DIR__ . "/../resources/series/{$slug}.html");
        return view('serie', [
            'serie' => $serie
        ]);
    }
}