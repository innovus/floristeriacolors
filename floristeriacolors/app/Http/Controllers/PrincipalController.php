<?php

namespace FloristeriaColors\Http\Controllers;

use Illuminate\Http\Request;
use FloristeriaColors\Category;
use FloristeriaColors\Product;

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
        $categories = Category::All();
        return View('plantillas.realizarArreglo',compact('categories'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoriaSeleccionada($id)
    {
        $categories = Category::All();
        $categoria = Category::find($id);
        return View('plantillas.categoriaSeleccionada',compact('categories','categoria'));

        
       // return View('plantillas.categoriaSeleccionada');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function arregloSeleccionado($id)
    {
        $producto = Product::find($id);
        return View('plantillas.arregloSeleccionado',compact('producto'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        
        return View('plantillas.login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacto()
    {
        
        return View('plantillas.contacto');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cuentaUsuario()
    {
        
        return View('plantillas.cuentaUsuario');
    }
}
