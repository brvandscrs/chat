<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() : View
    {
        return view('test');
        
        // Récupère tous les messages dans la variable $message
        // et les ordonne par date_heure croissante
        $message = Message::query()
        ->ord
        ->get();
        // return view('home');
        return view('home', compact('messages'));
    }
}
