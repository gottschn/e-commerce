@extends('Admin.layouts.app')

@section('styles')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css" integrity="sha512-EQF8N0EBjfC+2N2mlaH4tNWoUXqun/APQIuFmT1B+ThTttH9V1bA0Ors2/UyeQ55/7MK5ZaVviDabKbjcsnzYg==" crossorigin="anonymous" />
@endsection

@section('content')
<h2 class="text-center mb-5">Crear categorias</h2>

<div class="row justify-content-center mt-5">
   <div class="col-md-8">
       <form method="POST" enctype="multipart/form-data" action="{{route('categorias.store')}}" novalidate>
          @csrf

          <div class="form-group">
            <label for="nombre">Nombre</label>
               
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="nombre Prenda"/>

            @error('nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
               
            @enderror
         </div>
        
          <div class="form-group">
            <input type="submit" class="btn btn-outline-dark" value="Agregar Prenda">
          </div>
       </form>
   </div>
</div>
@endsection

@section('botones')

<a href="{{route('categorias.index')}}">
    <button type = "buttom" class="btn btn-outline-dark">VOLVER</button>
</a>

@endsection

@section('scripts')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js" integrity="sha512-S9EzTi2CZYAFbOUZVkVVqzeVpq+wG+JBFzG0YlfWAR7O8d+3nC+TTJr1KD3h4uh9aLbfKIJzIyTWZp5N/61k1g==" crossorigin="anonymous"></script>
@endsection