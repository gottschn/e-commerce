@extends('Admin.layouts.app')

@section('styles')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css" integrity="sha512-EQF8N0EBjfC+2N2mlaH4tNWoUXqun/APQIuFmT1B+ThTttH9V1bA0Ors2/UyeQ55/7MK5ZaVviDabKbjcsnzYg==" crossorigin="anonymous" />
@endsection

@section('content')
<h2 class="text-center mb-5">Editar prendas</h2>

<div class="row justify-content-center mt-5">
   <div class="col-md-8">

       <form method="POST" enctype="multipart/form-data" action="{{route('productos.update', $producto)}}" novalidate>
          @csrf

          @method('PUT')
          <div class="form-group">
             <label for="subcategoria_id">Subcategoria</label>
            

              <select name="subcategoria_id" 
                      class="form-control @error('subcategoria_id') is-invalid @enderror"
                      id="subcategoria_id">
   
                      <option value="">Seleccione opcion</option>
                      @foreach($subcategorias as $subcategoria)
                          <option value="{{ $subcategoria->id }}" {{ $producto->subcategoria_id == $subcategoria->id ? 'selected' : ''}}
                                        >{{$subcategoria->nombre}}</option>
                      @endforeach
              </select>

             @error('subcategoria_id')
             <span class="invalid-feedback d-block" role="alert">
                 <strong>{{$message}}</strong>
             </span>
                
             @enderror
          </div>

          <div class="form-group">
            <label for="nombre">Nombre</label>
               
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="nombre Prenda" value = "{{ $producto->nombre }}"/>

            @error('nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
               
            @enderror
         </div>

         <div class="form-group">
            <label for="precio">Precio</label>
               
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" id="precio" placeholder="precio prenda" value = "{{ $producto->precio }}"/>

            @error('precio')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
               
            @enderror
         </div>

         <div class="form-group">
            <label for="talle">Talle</label>
               
            <input type="text" name="talle" class="form-control @error('talle') is-invalid @enderror" id="talle" placeholder="talle Prenda" value = "{{ $producto->talle }}"/>

            @error('talle')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
               
            @enderror
         </div>

         <div class="form-group">
            <label for="foto1">Foto 1</label>
               
            <input type="file" name="foto1" class="form-control" id="foto1" placeholder="foto1 Prenda"/>

            @error('foto1')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
               
            @enderror
         </div>

         <div class="mt-4">
           <p>Foto1 actual</p>
           <img src="/storage/{{$producto->foto1}}" alt="width:100px">
         </div>

         <div class="form-group">
            <label for="foto2">Foto 2</label>
               
            <input type="file" name="foto2" class="form-control" id="foto2" placeholder="foto2 Prenda"/>

            @error('foto2')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
               
            @enderror
         </div>

         <div class="mt-4">
           <p>Foto2 actual</p>
           <img src="/storage/{{$producto->foto2}}" alt="width:100px">
         </div>

         <div class="form-group">
             <label for="descripcion">Descripcion</label>
                
             <input type="hidden" name="descripcion"  id="descripcion" placeholder="descripcion Prenda" value = "{{ $producto->descripcion }}"/>
             <trix-editor input="descripcion" class="form-control @error('descripcion') is-invalid @enderror" input="descripcion"></trix-editor> 

             @error('descripcion')
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

<a href="{{route('productos.index')}}">
    <button type = "buttom" class="btn btn-outline-dark">VOLVER</button>
</a>

@endsection

@section('scripts')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js" integrity="sha512-S9EzTi2CZYAFbOUZVkVVqzeVpq+wG+JBFzG0YlfWAR7O8d+3nC+TTJr1KD3h4uh9aLbfKIJzIyTWZp5N/61k1g==" crossorigin="anonymous"></script>
@endsection