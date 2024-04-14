<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil; // Importa el modelo Perfil desde el namespace correcto
use Illuminate\View\View;

class PerfilesController extends Controller
{
    public function index(): View
    {
        $perfiles = Perfil::all();
        return view('perfiles.index',['perfiles' => $perfiles]);
    }
}
