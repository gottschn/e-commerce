@extends('Web.layouts.app')

@section('content')


    <section id = "main">
            <div class="col-md-7 col-8 p-b-50 ">
    

                <div class="contact-info ml-5">
                    <br><br>
                
                    <form>
                        <div class="form-group ">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control input-lg"  placeholder="Ingrese su nombre"> <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dirección de correo electrónico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico">
                            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Mensaje</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
                     
                <aside  class = "col-sm-4">   
                     <ul>  
                        <img id = "imagen-lol" src="img/bg-img/maqX.jpg">
                     </ul>        
                </aside> 
    
            </div>
 
    </section>

    <br><br>


@endsection