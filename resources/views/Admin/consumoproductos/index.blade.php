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
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Impuesto</th>
                            <th scope="col">Sobrecargo</th>
                            <th scope="col">Total</th>
                            <th scope="col">Forma de pago</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Localidad</th>
                            <th scope="col">Direccion</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($consumoproductos as $consumoproducto)

                                <td>{{$subcategoria->id}}</td> 
                                <td>{{$subcategoria->producto_id}}</td> 
                                <td>{{$subcategoria->cantidad}}</td>
                                <td>{{$subcategoria->impuesto}}</td>
                                <td>{{$subcategoria->sobrecargo}}</td> 
                                <td>{{$subcategoria->total}}</td> 
                                <td>{{$subcategoria->formadepago}}</td>
                                <td>{{$subcategoria->provincia}}</td> 
                                <td>{{$subcategoria->localidad}}</td> 
                                <td>{{$subcategoria->direccion}}</td>
    
                                
                                            
                                <td><a href='editar.php?id=" . $venta[0] ."'><Button type ='button' class = 'btn btn-link text-dark'>Modificar </Button></a></td>
                                <td><a href='eliminar.php?id=" . $venta[0] . "'><Button type ='button' class = 'btn btn-link text-dark'>Eliminar </Button></a></td>
                                </tr>
    
                            @endforeach
                        </tbody>
                        
                    </table>

            </div>
    </div>
</main>

@endsection
