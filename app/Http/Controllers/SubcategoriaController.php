<?php

namespace App\Http\Controllers;

use App\categoria;
use Illuminate\Support\Facades\DB;
use Iluminate\Support\Facades\Auth;
use App\subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('Admin/subcategorias/index');

        $subcategorias = subcategoria::all();

        return view('Admin/subcategorias/index')->with('subcategorias', $subcategorias);  
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('Admin/subcategorias/create');

        $categorias = categoria::all(['id', 'nombre']);


        return view('Admin/subcategorias/create')->with('categorias', $categorias);
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
            'categoria_id' => 'required',
            'nombre'       => 'required',
        ]);

        $subcategoria = new subcategoria();
        
        subcategoria::create($request->all());

        return redirect()->action('SubcategoriaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function show(subcategoria $subcategoria)
    {
        

       return false;
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(subcategoria $subcategoria)
    {
        $categorias = categoria::all(['id', 'nombre']);

        return view('Admin/subcategorias/edit', compact('categorias', 'subcategoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subcategoria $subcategoria)
    {
        $data = request()->validate([
            'categoria_id'    => 'required',
            'nombre'          => 'required',
        ]);

        $subcategoria->categoria_id = $data['categoria_id'];
        $subcategoria->nombre       = $data['nombre'];

        $subcategoria->save();

        return redirect()->action('SubcategoriaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(subcategoria $subcategoria)
    {
        $subcategoria->delete();

        return redirect()->action('SubcategoriaController@index');
    }
}
