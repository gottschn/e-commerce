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
                            <th scope="col">Nombre</th>
                            <th></th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($categorias as $categoria)
                                
                                <td>{{$categoria->id}}</td> 
                                <td>{{$categoria->nombre}}</td>
    
                                
                                            
                                <td><a href ="{{route('categorias.edit', $categoria)}}"  class = 'btn btn-link text-dark'>Editar</a></td>

                                <td>
                                <form action="{{route('categorias.destroy', $categoria)}}" method="POST" enctype="multipart/form-data">
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

            <a href="{{route('categorias.create')}}">
                <button type = "buttom" class="btn btn-outline-dark">NUEVO</button>
            </a>

    </div>
</main>

@endsection
