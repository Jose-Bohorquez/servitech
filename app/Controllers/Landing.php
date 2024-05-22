<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index(): string
    {
        // return view('landing/modulos/1_header')
        // . view('landing/modulos/2_btnTema')
        // . view('landing/modulos/3_navbarSup')
        // . view('landing/paginas/inicio')
        // . view('landing/modulos/4_footer');

        $datosPagina = ["titulo" => "inicio"];
        return view('landing/2_landingViewLayouts/inicio', $datosPagina);
    }

    public function nosotros(): string
    {
        $datosPagina = ["titulo" => "Nosotros"];
        return view('landing/2_landingViewLayouts/nosotros', $datosPagina);
    }
}
