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
        $masVendidos = Product::limit(6)->get();
        return View('plantillas.index',compact('categories','masVendidos'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function realizarArreglo()
    {
        $categories = Category::All();
        $masVendidos = Product::limit(6)->get();
        return View('plantillas.realizarArreglo',compact('categories','masVendidos'));
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
    /*
    public function cuentaUsuario()
    {
        
        return View('plantillas.cuentaUsuario');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ayuda()
    {
        
        return View('plantillas.ayuda');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function conocenos()
    {
        
        return View('plantillas.conocenos');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function puntosFloristeria()
    {
        
        return View('plantillas.puntosFloristeria');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resumenCompra()
    {
        
        return View('plantillas.resumenCompra');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function finalizarCompra()
    {
        
        return View('plantillas.finalizarCompra');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        
        return View('plantillas.blog');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function misDatos()
    {
        
        return View('plantillas.misDatos');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function misProductos()
    {
        
        return View('plantillas.misProductos');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevoProducto()
    {
        
        return View('plantillas.nuevoProducto');
    }
}
