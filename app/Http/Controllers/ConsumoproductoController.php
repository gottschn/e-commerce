<?php

namespace App\Http\Controllers;

use App\consumoproducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsumoproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumoproductos = consumoproducto::all();

        return view('Admin/consumoproductos/index')->with('consumoproductos', $consumoproductos);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\consumoproducto  $consumoproducto
     * @return \Illuminate\Http\Response
     */
    public function show(consumoproducto $consumoproducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\consumoproducto  $consumoproducto
     * @return \Illuminate\Http\Response
     */
    public function edit(consumoproducto $consumoproducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\consumoproducto  $consumoproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, consumoproducto $consumoproducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\consumoproducto  $consumoproducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(consumoproducto $consumoproducto)
    {
        //
    }
}
