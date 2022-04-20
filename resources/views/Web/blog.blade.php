@extends('Web.layouts.app')

@section('content')


    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Fashion Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <section id = "main-qs">
        <body>
                <br><br><br><br><br><br><br><br>

                <div id = "titulito" class = "container">
                    
                    <div id = "col-img" class = "col-7">
                        <img src="img/bg-img/baner1.jpg">
                    </div>
                        
                        <div id = "col-texto" class = "container col-5 " >

                            <h2>TITULO DE IMAGEN</h2>
                            <br>

                            <p>

                                javdbnadhbpoidcabnlhdach uia  aiubdhcbiab iaubdcaiu a poabdhapujbda 
                                javdbnadhbpoidcabnlhdach uia  aiubdhcbiab iaubdcaiu a poabdhapujbda
                                javdbnadhbpoidcabnlhdach uia  aiubdhcbiab iaubdcaiu a poabdhapujbda
                                javdbnadhbpoidcabnlhdach uia  aiubdhcbiab iaubdcaiu a poabdhapujbda 
                                javdbnadhbpoidcabnlhdach uia  aiubdhcbiab iaubdcaiu a poabdhapujbda
                                javdbnadhbpoidcabnlhdach uia  aiubdhcbiab iaubdcaiu a poabdhapujbda
                            </p>
 

                        </div>

                </div>
                <br><br><br><br><br><br><br><br> 
        </body>

    </section>
    
    @include('Web.carrusel');

    @endsection