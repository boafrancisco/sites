<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    // Home
    public function home()
    {
        return view('site.home');
    }

    // Servicos
    public function servicos()
    {
        return view('site.servicos');
    }

    //Contacto
    public function contacto()
    {
        return view('site.contacto');
    }

    //Galeria
    public function galeria()
    {
        return view('site.galeria');
    }
}
