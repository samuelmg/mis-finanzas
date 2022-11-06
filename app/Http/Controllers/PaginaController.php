<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function contacto()
    {
        return view('paginas/contacto');
    }

    public function actualizaciones($version = null)
    {
        $arrVersiones = [
            'v1' => 'Creación del Sistema',
            'v2' => 'Corrección de errores',
            'v3' => 'Mejoras',
        ];
        return view('paginas.historico-actualizaciones', compact('arrVersiones', 'version'));
    }
}
