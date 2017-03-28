<?php

namespace FloristeriaColors\Http\Controllers;

use Illuminate\Http\Request;
use FloristeriaColors\Category;
use FloristeriaColors\Occasion;
use FloristeriaColors\Product;
use FloristeriaColors\Data;
use FloristeriaColors\Article;
use Session;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masVendidos = Product::limit(4)->get();
        return View('plantillas.index',compact('categories','masVendidos'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function realizarArreglo()
    {
        $categories = Category::where('category_type_id', 1)->get();
        $ocasiones = Occasion::All();
        $masVendidos = Product::limit(6)->get();

        return View('plantillas.realizarArreglo',compact('categories','masVendidos','ocasiones'));
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
        $ocasiones = Occasion::All();
        return View('plantillas.categoriaSeleccionada',compact('categories','categoria','ocasiones'));

        
       // return View('plantillas.categoriaSeleccionada');
    }
    public function filtro($filtro,$id)
    {
        $categories = Category::where('category_type_id', 1)->get();
        $ocasiones = Occasion::All();
        if($filtro == 'categorias'){
            
            $categoria = Category::find($id);
            $nombre = $categoria->name;
            $products = $categoria->products;
            

        }else if ($filtro == 'ocasiones'){
            
            $ocasion = Occasion::find($id);
            $products = $ocasion->products;
            $nombre = $ocasion->ocasion;

        }
        return View('plantillas.categoriaSeleccionada',compact('categories','ocasiones','products','nombre'));

        
       // return View('plantillas.categoriaSeleccionada');
    } 

    public function dropdown($id){

        $ocasion = Occasion::find($id);
        $products = $ocasion->products;
        return $products->pluck('nombre','id');

    }

    public function arreglos()
    {
        $categories = Category::where('category_type_id', 1)->get();
        $ocasiones = Occasion::All();


        $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*')->where('category_type_id', 1)->get();
        $nombre = "Arreglos";
            
        return View('plantillas.categoriaSeleccionada',compact('categories','ocasiones','products','nombre'));

        
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
        $categories = Category::where('category_type_id', 2)->get();
        return View('plantillas.arregloSeleccionado',compact('producto','categories'));
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
        $data = Data::first();
        return View('plantillas.contacto',compact('data'));
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
        $articles = Article::All();
        return View('plantillas.blog',compact('articles'));
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

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function misCategorias()
    {
        
        return View('plantillas.misCategorias');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevoPrecio()
    {
        
        return View('plantillas.nuevoPrecio');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function misPrecios()
    {
        
        return View('plantillas.misPrecios');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function videos()
    {
        
        return View('plantillas.videos');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminBlog()
    {
        
        return View('plantillas.adminBlog');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevoPost()
    {
        
        return View('plantillas.nuevoPost');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ocasiones()
    {
        
        return View('plantillas.ocasiones');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function moreVendidos()
    {
        
        return View('plantillas.moreVendidos');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destacados()
    {
        
        return View('plantillas.destacados');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listadoClientes()
    {
        
        return View('plantillas.listadoClientes');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ventas()
    {
        
        return View('plantillas.ventas');
    }
    public function admin()
    {
        
        return View('layouts.adminBase');
    }

    //manejo de sessiones carrito

    public function cartVS (Request $request)
    {
        parse_str(file_get_contents("php://input"), $_POST);
        Session::put('cart',$request->json()->all());
        return (Session::get('cart'));
        

    }

}
