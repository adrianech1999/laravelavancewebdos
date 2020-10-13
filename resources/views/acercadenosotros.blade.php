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
        <div class="container my-3">
            <h2>¿Quienes somos?</h2>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eligendi atque fugit optio? Nihil corporis dolore quidem molestias recusandae quaerat quas atque accusamus tempora, deserunt nam dolor sint officiis neque.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eligendi atque fugit optio? Nihil corporis dolore quidem molestias recusandae quaerat quas atque accusamus tempora, deserunt nam dolor sint officiis neque.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eligendi atque fugit optio? Nihil corporis dolore quidem molestias recusandae quaerat quas atque accusamus tempora, deserunt nam dolor sint officiis neque.</p>
            <h2>Nuestra historia</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eligendi atque fugit optio? Nihil corporis dolore quidem molestias recusandae quaerat quas atque accusamus tempora, deserunt nam dolor sint officiis neque.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eligendi atque fugit optio? Nihil corporis dolore quidem molestias recusandae quaerat quas atque accusamus tempora, deserunt nam dolor sint officiis neque. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat odio sit, dicta tenetur delectus a harum soluta illo numquam blanditiis ipsum deserunt in, praesentium assumenda molestias dolorum accusantium. Inventore, a!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eligendi atque fugit optio? Nihil corporis dolore quidem molestias recusandae quaerat quas atque accusamus tempora, deserunt nam dolor sint officiis neque.</p>
        </div>
    </div>
@endsection