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

        $datosPagina = ["titulo" => "inicio", 
                        "tituloAlerta" => "Buen Trabajo", 
                        "contenidoAlerta" => "estas viendo la Pagina de inicio",
                        "tipoAlerta" => "success"
                       ];
        return view('landing/2_landingViewLayouts/inicio', $datosPagina);
    }

    public function mira(): string
    {
        #return view('welcome_message');
        return "ruta xxx";
    }
}
