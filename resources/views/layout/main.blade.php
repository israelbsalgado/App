<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title')
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!--Font do google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- Css bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles da aplicacao-->
        <link rel="Stylesheet" href="/css/style.css">

        <!-- HTML5Shiv -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <![endif]-->

        <!-- Scripts aplicacao -->
        <script src="/js/script.js" ></script> <!--Arquivo javaScript -->
        <script src="js/vanilla-tilt.js" ></script> <!--animação do card - vanilla-->

        
    </head>
    <body class="branco" >
        <header>
            <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-fixa ">
                <div class="container">
                    <!--logo-->
                    <a href="/" class="navbar-brand">
                        <img src="/imagens/logo.png" width="142">
                    </a>

                    <!--botao de responsividade-->
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                        <i class="fas fa-bars text-white"></i>
                    </button>

                    <!--inicio menu-->
                    <div class="collapse navbar-collapse " id="nav-principal">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="" class="nav-link">App</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Store</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link animacao">Sobre</a>
                            </li>

                            <li class="nav-item">
                                <a href="/contato/client" class="nav-link">Contato</a>
                            </li>
                            <!--Botão download - Menu-->
                            <button class="btn-payapp  branco">Download</button>    
                        </ul>
                    </div> <!--fim menu-->
                </div>
            </nav>
        </header> <!--Fim do Cabeçalho-->
      
        @yield('content')

        <footer class="zona-azul p-5" >
        <div class="container">
            <div class="smartphone text-right" >
                <img src="/imagens/smartphone.png" alt=""  id="smartphone-media" > 
            </div>
            <div class="col-md-12 ">
                <div class="col-md-6">
                    <div>
                        <a href="#" class="w-50 mt-5" >
                            <img src="/imagens/logo-branca.png" >
                        </a> 
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6 ">
                            <ul class="  w-75 navbar-nav">
                                <li class="">
                                    <a href="" class="nav-link branco nav-item">App</a>
                                </li>
                                <li class="">
                                    <a href="" class="nav-link branco nav-item">Store</a>
                                </li>
                                <li class="">
                                    <a href="" class="nav-link branco nav-item">Sobre Nós</a>
                                </li>
                                <li class="">
                                    <a href="contato/client" class="nav-link branco nav-item">Contato</a>
                                </li>
                        </div>
                        <div class="col-md-6">
                                <ul class=" w-75 navbar-nav">
                                    <li class="">
                                        <a href="" class="nav-link branco nav-item">FAQs</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link branco nav-item">Politica de Privacidade</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link branco nav-item">Cookies</a>
                                    </li>
                                </ul>
                        </div>  
                        
                    </div>                            
                    
                </div>
                
                
            </div> 
            <div class="container">
                <div class="row mt-5">
                    <div>
                        <span>Desenvolvido por &copy Israel Salgado</span>
                        
                    </div>
                    <div class="branco redes-sociais">
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
            

       
    </footer>
        
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>