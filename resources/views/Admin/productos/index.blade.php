@extends('Admin.layouts.app')

@section('content')


<main>
    <div class="container-fluid">

    <div class = "container table users table-hover">
        <div class = "table-responsive">
                <br>
                    <table class="table table-striped table-bordered table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Subcategoria</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Talle</th>
                            <th scope="col">Foto 1</th>
                            <th scope="col">Foto 2</th>
                            <th></th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($productos as $producto)
                                
                            <td>{{$producto->id}}</td> 
                            <td>{{$producto->subcategoria->nombre}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->talle}}</td>
                            <td>{{$producto->foto1}}</td>
                            <td>{{$producto->foto2}}</td>

                            
                                        
                            <td><a href ="{{route('productos.edit', $producto)}}"  class = 'btn btn-link text-dark'>Editar</a></td>
 
                            <td>
                            <form action="{{route('productos.destroy', $producto)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('DELETE')
                               <input type="submit" class="btn btn-link text-dark" value="eliminar">
                            
                            </form>
                            </td>
                            </tr>

                            @endforeach

                        </tbody>
                        
                    </table>

            </div>
            <br>
 
            <a href="{{route('productos.create')}}">
                <button type = "buttom" class="btn btn-outline-dark">NUEVO</button>
            </a>
            
    </div>



        
    </div>
</main>

   
@endsection