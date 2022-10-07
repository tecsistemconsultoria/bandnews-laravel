{{-- @extends('layouts.main')
@section('content')

@endsection --}}

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANDNEWS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg bg-light shadow-sm " style="height: 100%; width: 100%; display: flex; justify-content: aro;">
            <div class="container" style="height: 100%;">
                <a class="" href="#">
                    <img src="./img/Logo_BandNews.png" alt="Band News" style="width: 100px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" style="height: 100%;">
                    <ul class="navbar-nav" style="height: 100%;">
                        <li class="nav-item nav_item_custom" style="height: 100%;">
                            <a class="nav-link nav_link_custom" aria-current="page" href="#">AO VIVO</a>
                        </li>
                        <li class="nav-item nav_item_custom">
                            <a class="nav-link nav_link_custom" href="#">NOTÍCIAS</a>
                        </li>
                        <li class="nav-item nav_item_custom">
                            <a class="nav-link nav_link_custom" href="#">POLÍTICA</a>
                        </li>
                        <li class="nav-item nav_item_custom">
                            <a class="nav-link nav_link_custom">ECONOMIA</a>
                        </li>
                        <li class="nav-item nav_item_custom">
                            <a class="nav-link nav_link_custom">SAÚDE</a>
                        </li>
                        <li class="nav-item nav_item_custom">
                            <a class="nav-link nav_link_custom">BRASIL</a>
                        </li>
                        <li class="nav-item nav_item_custom">
                            <a class="nav-link nav_link_custom">INTERNACIONAL</a>
                        </li>
                        <li class="nav-item nav_item_custom">
                            <a class="nav-link nav_link_custom">CANAIS NEWCO</a>
                        </li>
                        <li class="nav-item nav_item_custom">
                            <a class="nav-link nav_link_custom">PODCAST</a>
                        </li>

                    </ul>
                    <img src="./img/Logo_Band.svg" alt="Band" style="width: 100px">

                </div>
            </div>
        </nav>

        <section id="section01">
            <div class="container">
                <div class="row">
                    <div class="main col-md-10 col-lg-8">
                        <a href="#" class="box-content">
                            <h1>CATEGORIA</h1>
                            <div class="main-box box">
                                <h2>Titulo</h2>
                            </div>
                        </a>
                    </div>

                    <aside class="col-md-5 col-lg-4">
                        <a href="#" class="box-content">
                            <h1>CATEGORIA</h1>
                            <div class="aside-box box">
                                <h2>Titulo</h2>
                            </div>
                        </a>
                        <a href="#" class="box-content">
                            <h1 class="mt-4">CATEGORIA</h1>
                            <div class="aside-box box">
                                <h2>Titulo</h2>
                            </div>
                        </a>
                    </aside>
                </div>
            </div>
        </section>

        <div id="ads02"></div>

        <section id="section03">
            <div class="container">
                <div class="row">
                    <div id="left" class="col-8">
                        <a href="#" class="small-box">
                            <div class="box col-4"></div>
                            <div class="text">
                                <h1>CATEGORIA</h1>
                                <h2>Título</h2>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                        <hr>
                        <a href="#" class="small-box">
                            <div class="box col-4"></div>
                            <div class="text">
                                <h1>CATEGORIA</h1>
                                <h2>Título</h2>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                    </div>
                    <div id="right" class="col-4">
                        <h1>DESTAQUES</h1>
                        <div id="notice">
                            <a href="#" class="notice-content">
                                <h2>01</h2>
                                <i class="fa-solid fa-angle-right"></i>
                                <h3>Título</h3>
                            </a>
                            <a href="#" class="notice-content">
                                <h2>02</h2>
                                <i class="fa-solid fa-angle-right"></i>
                                <h3>Título</h3>
                            </a>
                            <a href="#" class="notice-content">
                                <h2>03</h2>
                                <i class="fa-solid fa-angle-right"></i>
                                <h3>Título</h3>
                            </a>
                            <a href="#" class="notice-content">
                                <h2>04</h2>
                                <i class="fa-solid fa-angle-right"></i>
                                <h3>Título</h3>
                            </a>
                            <a href="#" class="notice-content">
                                <h2>05</h2>
                                <i class="fa-solid fa-angle-right"></i>
                                <h3>Título</h3>
                            </a>
                            <a href="#" class="notice-content">
                                <h2>06</h2>
                                <i class="fa-solid fa-angle-right"></i>
                                <h3>Título</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section05">
            <div class="container">
                <div class="row">
                    <div class="left col-8">
                        <a href="#" class="small-box">
                            <div class="box col-4"></div>
                            <div class="text">
                                <h1>CATEGORIA</h1>
                                <h2>Título</h2>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                        <hr>
                        <a href="#" class="small-box">
                            <div class="box col-4"></div>
                            <div class="text">
                                <h1>CATEGORIA</h1>
                                <h2>Título</h2>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                        <hr>
                        <a href="#" class="small-box">
                            <div class="box col-4"></div>
                            <div class="text">
                                <h1>CATEGORIA</h1>
                                <h2>Título</h2>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                    </div>
                    <div id="ads05" class="col-2"></div>
                </div>
            </div>
        </section>

        <section id="section06">
            <div class="title">
                <h1>CATEGORIA</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="main col-md-10 col-lg-6">
                        <a href="#" class="box-content">
                            <div class="main-box box mt-3"></div>
                            <div class="text">
                                <h2>Título</h2>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                    </div>

                    <aside class="col-md-5 col-lg-6">
                        <a href="#" class="box-content">
                            <div class="aside-box box"></div>
                            <div class="text">
                                <h2>CATEGORIA</h2>
                                <h3>Título</h3>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                        <a href="#" class="box-content">
                            <div class="aside-box box"></div>
                            <div class="text">
                                <h2>CATEGORIA</h2>
                                <h3>Título</h3>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                        <a href="#" class="box-content">
                            <div class="aside-box box"></div>
                            <div class="text">
                                <h2>CATEGORIA</h2>
                                <h3>Título</h3>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                        <a href="#" class="box-content">
                            <div class="aside-box box"></div>
                            <div class="text">
                                <h2>CATEGORIA</h2>
                                <h3>Título</h3>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                    </aside>
                </div>
            </div>
        </section>

        <section id="section08">
            <div class="title">
                <h1>COLUNISTAS</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-8" id="colunistas">
                        <div class="perfil">
                            <div class="img"></div>
                            <p>MÔNICA BERGAMO</p>
                            <div class="icons">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="perfil">
                            <div class="img"></div>
                            <p>FERNANDO SCHULER</p>
                            <div class="icons">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="perfil">
                            <div class="img"></div>
                            <p>EVARISTO DE MIRANDA</p>
                            <div class="icons">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="perfil">
                            <div class="img"></div>
                            <p>MÔNICA BERGAMO</p>
                            <div class="icons">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="perfil">
                            <div class="img"></div>
                            <p>FERNANDO SCHULER</p>
                            <div class="icons">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="perfil">
                            <div class="img"></div>
                            <p>EVARISTO DE MIRANDA</p>
                            <div class="icons">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section10">
            <div class="title">
                <h1>Programas</h1>
            </div>
            <div class="container">
                <div id="programas">
                    <a href="#" class="programa">
                        <div class="img"></div>
                        <div class="legend">
                            <i class="fa-solid fa-chevron-right"></i>
                            <h2>JORNAL DA BAND</h2>
                        </div>
                    </a>
                    <a href="#" class="programa">
                        <div class="img"></div>
                        <div class="legend">
                            <i class="fa-solid fa-chevron-right"></i>
                            <h2>CAPITAL E MERCADO</h2>
                        </div>
                    </a>
                    <a href="#" class="programa">
                        <div class="img"></div>
                        <div class="legend">
                            <i class="fa-solid fa-chevron-right"></i>
                            <h2>CANAL LIVRE</h2>
                        </div>
                    </a>
                    <a href="#" class="programa">
                        <div class="img"></div>
                        <div class="legend">
                            <i class="fa-solid fa-chevron-right"></i>
                            <h2>BANDNEWS DOCS</h2>
                        </div>
                    </a>
                    <a href="#" class="programa">
                        <div class="img"></div>
                        <div class="legend">
                            <i class="fa-solid fa-chevron-right"></i>
                            <h2>PONTO A PONTO</h2>
                        </div>
                    </a>
                    <a href="#" class="programa">
                        <div class="img"></div>
                        <div class="legend">
                            <i class="fa-solid fa-chevron-right"></i>
                            <h2>CIDADE VIVA</h2>
                        </div>
                    </a>
                    <a href="#" class="programa">
                        <div class="img"></div>
                        <div class="legend">
                            <i class="fa-solid fa-chevron-right"></i>
                            <h2>CONEXÃO COM THE NEW YORK TIMES</h2>
                        </div>
                    </a>
                    <a href="#" class="programa">
                        <div class="img"></div>
                        <div class="legend">
                            <i class="fa-solid fa-chevron-right"></i>
                            <h2>CAPITAL NATURAL</h2>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="section11">
            <div class="title">
                <h1>MAIS NOTÍCIAS</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="left col-8">
                        <a href="#" class="small-box">
                            <div class="box col-4"></div>
                            <div class="text">
                                <h2>CATEGORIA</h2>
                                <h3>Título</h3>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                        <hr>
                        <a href="#" class="small-box">
                            <div class="box col-4"></div>
                            <div class="text">
                                <h2>CATEGORIA</h2>
                                <h3>Título</h3>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                        <hr>
                        <a href="#" class="small-box">
                            <div class="box col-4"></div>
                            <div class="text">
                                <h2>CATEGORIA</h2>
                                <h3>Título</h3>
                                <p>Resumo notícias</p>
                            </div>
                        </a>
                    </div>
                    <div id="ads11" class="col-2"></div>
                </div>
                <button class="btn mt-4">CARREGAR MAIS <i class="fa-solid fa-chevron-down"></i></button>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div id="p1">
                <div class="logo">
                    <img src="./assets/img/Logo-Band.png" alt="Logo da Band" class="col-2">
                    <h1>BANDEIRANTES</h1>
                </div>
                <button class="btn"><i class="fa-solid fa-bug"></i> REPORTAR UM ERRO</button>
                <div class="icons">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
            </div>
            <div id="p2">
                <div class="links">
                    <a href="#">Anuncie</a>
                    <a href="#">Fale Conosco</a>
                    <a href="#">Trabalhe Aqui</a>
                    <a href="#">Política de Privacidade</a>
                </div>
                <hr>
                <div class="copy">
                    <p>&copy; 2022 BANDEIRANTES. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
