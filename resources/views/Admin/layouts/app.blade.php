<!DOCTYPE html>
<html lang="en">

<head>

            <meta charset="utf-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                    <meta name="description" content="" />
                    <meta name="author" content="" />
                    <title>PATXA - Admin</title>
                    <link rel="icon" href="{{ asset('administrador/img/PATXA-ISOLOGO.png')}}">
                    <link href="{{ asset('administrador/dist/css/admin.css')}}" rel="stylesheet" />
                    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>


                    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous" defer></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous" defer></script>
                    <script src="{{ asset('administrador/js/scripts.js')}}" defer ></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous" defer></script>
                    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous" defer></script>
                    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous" defer></script>
                   
                    <meta name="csrf-token" content="{{csrf_token()}}">

                    @yield('styles')
 </head>

        <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{route('index')}}"><img class = "img-fluid" src="{{ asset('administrador/img/PATXA-LOGO.png')}}" alt=""></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Espaciador-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading">Inicio</div>
                                <a class="nav-link" href="{{route('indexAdmin')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Informacion
                                </a>
                                <div class="sb-sidenav-menu-heading">Secciones</div>
                                <a class="nav-link" href="{{route('categorias.index')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Categoria
                                </a>

                                <a class="nav-link" href="{{route('subcategorias.index')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Subcategoria
                                </a>

                                <a class="nav-link" href="{{route('productos.index')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    ABM - Producto
                                </a>
                                <a class="nav-link" href="{{route('consumoproducto.index')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Consumo - Producto
                                </a>
                                <a class="nav-link" href="{{route('cliente')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Clientes
                                </a>
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Logueado como:</div>
                            Administrador
                        </div>
                    </nav>
                </div> 

               
                
                <div id="layoutSidenav_content">

<main>
    <div class="container">
        <div class="row">

            <main class="py-4 mt-5 col-12">
                @yield('content')
            </main>

            <div class="py-4 mt-5 col-12">
                @yield('botones')
            </div>

        </div>
    </div>
</main>

<div class ="footerclass">
    <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2020 All rights reserved | Web Site Created by pITime</div>
                    </div>
                </div>
    </footer>
</div>
</div>
</div>

@yield('scripts')

</body> 
</html>



