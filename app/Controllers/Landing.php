<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index(): string
    {
        return view('landing/modulos/1_header')
        . view('landing/modulos/2_btnTema')
        . view('landing/modulos/3_navbarSup')
        . view('landing/paginas/inicio')
        . view('landing/modulos/4_footer');
    }

    public function mira(): string
    {
        #return view('welcome_message');
        return "ruta xxx";
    }
}
