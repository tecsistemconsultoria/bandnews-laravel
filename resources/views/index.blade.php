@extends('layouts.main')
@section('content')
<div class="container py-5 px-5 mb-1 main_container">
    <div class="container banner">

    </div>
</div>

<div class="container mb-1 categories">
    <div class="row h-100">
        <div class="col-md-8 category_container p-3">
            <p class="category_title">{{ $noticia->category[0]->name }}</p>
            <div class="main_category d-flex align-items-end" style="background-image: url({{ $noticia->image_front_b64 }}); background-repeat: no-repeat; background-size: cover;">
                <h2 class="text-white m-4 titulo">{{ $noticia->name }}</h2>
            </div>
        </div>
        <div class="col-md-4 category_container d-flex flex-column p-3">
            <p class="category_title">Categoria</p>

            <div class="category mb-3" >

            </div>
            <div class="category">

            </div>
        </div>
    </div>
</div>
<div class="container py-5 px-5 mb-1 main_container">
    <div class="container banner">

    </div>
</div>
<div class="footer mt-5 py-5">
    <div class="container ">
        <div class="row mb-3">
            <div class="col-4 d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/Logo-Band.png') }}" alt="Logo Band" width="113" height="68">
                <span class="bandeirantes mx-3">BANDEIRANTES</span>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <button class="report">
                    <i class="fa-solid fa-bug"></i>
                    REPORTAR UM ERRO
                </button>
            </div>
            <div class="col-4 d-flex justify-content-between align-items-center">
                <i class="fa fa-facebook-f" style="font-size: 30px; color: #FFFFFF"></i>
                <i class="fa fa-instagram" style="font-size: 30px; color: #FFFFFF"></i>
                <i class="fa-brands fa-twitter" style="font-size: 30px; color: #FFFFFF"></i>
                <i class="fa-brands fa-youtube" style="font-size: 30px; color: #FFFFFF"></i>
                <i class="fa-brands fa-whatsapp" style="font-size: 30px; color: #FFFFFF"></i>
            </div>      
        </div>
        <div class="row">
            <div class="container text-center">
                <a href="#" class="text-white text-decoration-none">Anuncie</a><span class="text-white"> | </span>
                <a href="#" class="text-white text-decoration-none">Fale Conosco</a><span class="text-white"> | </span>
                <a href="#" class="text-white text-decoration-none">Trabalhe Aqui</a><span class="text-white"> | </span>
                <a href="#" class="text-white text-decoration-none">Política de Privacidade</a>
            </div>
            <hr class="mt-3" style="color: #FFFFFF">
            <div class="container text-center">
                <span class="text-white">&copy; 2022 BANDEIRANTES. Todos os direitos reservados.<span>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        window.addEventListener("load", function(event) {
            
        });

    </script>
@endsection