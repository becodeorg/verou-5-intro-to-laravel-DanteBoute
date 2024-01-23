<?php

// Giving a namespace to the HomeController class
namespace App\Http\Controllers;

// Using the Controller class by calling the Controller's namespace
use App\Http\Controllers\Controller;

// Your HomeController class
class HomeController extends Controller
{
    // Your "index" method, loading the page.
    public function home()
    {
        // Do stuff here ...

        // Returning the "home.blade.php" file as a view.
        return view("home");
    }
}