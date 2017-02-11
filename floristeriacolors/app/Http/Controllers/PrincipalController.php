<?php

namespace FloristeriaColors\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('plantillas.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function realizarArreglo()
    {
        return View('plantillas.realizarArreglo');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoriaSeleccionada()
    {
        return View('plantillas.categoriaSeleccionada');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function arregloSeleccionado()
    {
        return View('plantillas.arregloSeleccionado');
    }
}
