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
                            <th scope="col">Mail</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- no anda el foreach -->
                            @forelse($users as $user)
                                
                                <td>{{$user->id}}</td> 
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->direccion}}</td> 
                                <td>{{$user->telefono}}</td>
    
            

                                @empty
                                <p>q onda</p>
    
                            @endforelse
                        </tbody>
                        
                    </table>

            </div>
    </div>

        
    </div>
</main>

   
@endsection