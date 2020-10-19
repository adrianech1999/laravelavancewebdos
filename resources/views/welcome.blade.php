@extends('layouts.plantilla')

@section('contenido')
    <div class="container-fluid mx-0 p-0">
        <div id="carouselAcercadenosotros" class="carousel slide w-100 mx-0 p-0 mb-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselAcercadenosotros" data-slide-to="0" class="active"></li>
                <li data-target="#carouselAcercadenosotros" data-slide-to="1"></li>
                <li data-target="#carouselAcercadenosotros" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner mx-0" role="listbox">
                <div class="carousel-item active">
                    <img class="w-100" src="https://www.storeventas.com/admin/storage/slides/tienda2_1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT1NhX9kR-APxhcpQcamdKRZmJ6eGeOy15i5w&usqp=CAU" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="https://images.unsplash.com/photo-1580522154071-c6ca47a859ad?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselAcercadenosotros" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselAcercadenosotros" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="card bg-danger">
                        <img class="card-img-top w-100" src="https://t3.ftcdn.net/jpg/02/46/13/84/240_F_246138494_J3BjvqqPgou0jVqjknheDyNTKvsKGqXP.jpg" alt="">
                        <div class="card-body text-white">
                            <h4 class="card-title">Venta</h4>
                            <ul class="list-group bg-danger">
                                <li class="card-text list-group-item bg-dark border-1 border-white">Vendemos computadoras, dispositivos moviles y accesorios.</li>
                                <li class="card-text list-group-item bg-dark border-1 border-white">Tenemos productos nuevos y usados.</li>
                                <li class="card-text list-group-item bg-dark border-1 border-white">Precios accesibles y promociones</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="card bg-danger">
                        <img class="card-img-top w-100" src="https://t4.ftcdn.net/jpg/01/90/01/47/240_F_190014751_XLxnsfk3ubdVnTLWBxh7G16lXdjxRCCp.jpg" alt="">
                        <div class="card-body text-white">
                            <h4 class="card-title">Compra</h4>
                            <ul class="list-group bg-danger border-1 border-light">
                                <li class="card-text list-group-item bg-dark border-1 border-white">Compramos computadoras y todo tipo de dispositivos de ultima tecnologia.</li>
                                <li class="card-text list-group-item bg-dark border-1 border-white">No importa el estado, igual lo compramos.</li>
                                <li class="card-text list-group-item bg-dark border-1 border-white">Te ofrecemos un pago justo.</li>                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="card bg-danger">
                        <img class="card-img-top w-100" src="https://t4.ftcdn.net/jpg/01/81/37/43/240_F_181374302_irjVcsIRwPTKXcONaORuo97hLDrmFRno.jpg" alt="">
                        <div class="card-body text-white">
                            <h4 class="card-title">Reparaciones</h4>
                            <ul class="list-group bg-danger border-1 border-light">
                                <li class="card-text list-group-item bg-dark border-1 border-white">Reparamos computadoras y otros dispositivos</li>
                                <li class="card-text list-group-item bg-dark border-1 border-white">Reparaciones a nivel hardware y software</li>
                                <li class="card-text list-group-item bg-dark border-1 border-white">Contamos con repuestos y los mejores precios.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection