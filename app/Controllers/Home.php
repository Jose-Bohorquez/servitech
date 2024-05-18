<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('inicio');
        #return "ruta automatica";
    }

    public function mira(): string
    {
        #return view('welcome_message');
        return "ruta xxx";
    }
}
