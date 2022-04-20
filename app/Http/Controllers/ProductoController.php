<?php

namespace App\Http\Controllers;

use App\producto;
use App\subcategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Iluminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProductoController extends Controller
{
    //asi se controla el acceso, teniendo que estar logueado para acceder al contenido de este controlador, de lo contrario te manda al login
    public function __construct()
    {
        $this->middleware('auth', ['except'=>'show']); //aqui restringimos el acceso sin autenticacion, exepto al show
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $productos = producto::all();

        return view('Admin/productos/index')->with('productos', $productos);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategorias = subcategoria::all(['id', 'nombre']);


        return view('Admin/productos/create')->with('subcategorias', $subcategorias);

        //return view('Admin/productos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'subcategoria_id' => 'required',
            'nombre'          => 'required',
            'precio'          => 'required',
            'descripcion'     => 'required',
            'talle'           => 'required',
            'foto1'           => 'required', //necesito validar las imagenes( |image no funciona )
            'foto2'           => 'required',
        ]);

        $ruta_foto1 = $request['foto1']->store('upload-productos', 'public');
        $ruta_foto2 = $request['foto2']->store('upload-productos', 'public');

        /* AQUI SE INSTALA INTERVENTION IMAGE, USANDO EL COMENDO(composer require intervention/image)
           LA PALABRA "Image", "save()" Y "fit" SON RESERVADAS DE ESA LIBRERIA
        $img = Image::make( public_path("storage/{$ruta_foto1}"))->fit(1000, 550);
        $img = save();
        $img = Image::make( public_path("storage/{$ruta_foto2}"))->fit(1000, 550);
        $img = save();*/

            $producto = new producto();
        
       
            $producto->subcategoria_id = $request->input('subcategoria_id');
            $producto->nombre          = $request->input('nombre');
            $producto->precio          = $request->input('precio');
            $producto->talle           = $request->input('talle');
            $producto->foto1           = $ruta_foto1;
            $producto->foto2           = $ruta_foto2;
            $producto->descripcion     = $request->input('descripcion');

            $producto->save();
     

        return redirect()->action('ProductoController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto )
    {
        
        return view('Admin/productos/show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        $subcategorias = subcategoria::all(['id', 'nombre']);

        return view('Admin/productos/edit', compact('subcategorias', 'producto'));
        //return view('Admin/productos/create')->with('subcategorias', $subcategorias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        $data = request()->validate([
            'subcategoria_id' => 'required',
            'nombre'          => 'required',
            'precio'          => 'required',
            'descripcion'     => 'required',
            'talle'           => 'required',
        ]);

        $producto->subcategoria_id = $data['subcategoria_id'];
        $producto->nombre          = $data['nombre'];
        $producto->precio          = $data['precio'];
        $producto->descripcion     = $data['descripcion'];
        $producto->talle           = $data['talle'];

        if(request('foto1')){
            $ruta_foto1 = $request['foto1']->store('upload-productos', 'public');

            $f1 = Image::make( public_path("storage/{$ruta_foto1}"));

            //$f1->save();

            //$producto->producto = $ruta_foto1;
        }

        if(request('foto2')){
            $ruta_foto2 = $request['foto2']->store('upload-productos', 'public');

            $f2 = Image::make( public_path("storage/{$ruta_foto2}"));

            //$f2->save();

            //$producto->producto = $ruta_foto2;
        }

        $producto->save();

        return redirect()->action('ProductoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        $producto->delete();

        return redirect()->action('ProductoController@index');
    }

   
}
