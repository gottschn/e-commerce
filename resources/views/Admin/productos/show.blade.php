@extends('layouts.app')

@section('content')


<article class="contenido-producto">

<h1 class="text-center mb-4">{{ $producto->nombre }}</h1>

<div>
    <img src="{{ Storage::url($producto->foto1) }}" class="w-100" alt="jola">
</div>

<div class="receta-meta">
   <p>
   <span class="font-weigth-bold text-primary">subcategoria:</span>
   {{$producto->subcategoria->nombre}}
   </p>

   <p>
   <span class="font-weigth-bold text-primary">autor:</span>
   {{$producto->id}}
   </p>
</div>
</article>

@endsection