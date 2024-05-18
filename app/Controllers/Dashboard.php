<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('inicio');
    }

    public function mira(): string
    {
        #return view('welcome_message');
        return "ruta xxx";
    }
}
