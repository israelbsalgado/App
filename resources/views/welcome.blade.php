@extends ('layout.main')

@section('title', 'Seu aplicativo de pagamento')

@section('content')
<section ><!--Corpo-->
        <div class="container text-left mb-5 mr-5" id="corpo" >
                <div >
                    <h1 class="preto mt-5 pt-5">Conheça a nova forma de pagamento</h1>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="preto ">
                                Lorem ipsum dolor sit amet, 
                                conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                        </div>
                        <!--Botão corpo-->
                        <button class="btn-payapp-corpo branco mt-3">Baixe Agora</button>  
                    </div>
                    <div class="col-md-8  preto ">
                       <div class="caixa text-center">
                            <div class="conteudo-caixa p-2">
                                <div >
                                    <h4>Lorem ipsum
                                        dolor sit</h4>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, 
                                        conse ctetur adipisicing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
</section> <!--corpo-->


<section class="zona-azul" > <!--Corpo 2-->
        <div class=" container pb-5">
            <div class="col-md-12 w-50 m-auto pt-4 text-center branco">
                <h2 >App</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut </p>      
            </div>
            
            <!--Carosel - Card-->
            <div class="pt-5 pb-5">
                <div class="container">
                  <div class="row">
                        <div class="col-12">
                          <div id="carousel-corpo" class="carousel slide" data-ride="carousel">
              
                              <div class="carousel-inner">
                                  <div class="carousel-item active">
                                      <div class="row">
                                          
                                          <div class="col-md-3 mb-3">
                                              <div class="card">
                                                  <img class="card-img"  src="./imagens/maos-unidas.png">
                                                  <div class="card-body">
                                                      <a href="">
                                                            <h4 class="card-titulo">1 - Baixe o Aplicativo</h4>
                                                      </a>
                                                      <p class="card-texto branco">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </p>
              
                                                  </div>
                                                </div>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                              <div class="card">
                                                  <img class="card-img"  src="./imagens/maquina-cartao.png">
                                                  <div class="card-body">

                                                      <a href=""><h4 class="card-titulo">2 - Instale-o</h4></a>
                                                      <p class="card-texto branco">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </p>
              
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                              <div class="card">
                                                  <img class="card-img"  src="./imagens/maos-unidas.png">
                                                  <div class="card-body">
                                                      <a href=""><h4 class="card-titulo">3 - Crie a sua conta aqui</h4></a>
                                                      <p class="card-texto branco">With supporting text below as a natural lead-in to additional content.</p>
              
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="col-md-3 mb-3">
                                            <div class="card">
                                                <img class="card-img"  src="./imagens/maos-unidas.png">
                                                <div class="card-body">
                                                    <a href=""><h4 class="card-titulo">4 - Aprecie</h4></a>
                                                    <p class="card-texto branco">With supporting text below as a natural lead-in to additional content.</p>
            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  
                                  <div class="carousel-item">
                                      <div class="row">
              
                                          <div class="col-md-3 mb-3">
                                              <div class="card">
                                                  <img class="card-img"  src="./imagens/celular-pessoa.png">
                                                  <div class="card-body">
                                                      <a href=""><h4 class="card-titulo">5 -  </h4></a>
                                                      <p class="card-texto branco">Com texto de apoio abaixo como uma introdução natural para conteúdo adicional.</p>
              
                                                  </div>
              
                                              </div>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                              <div class="card">
                                                  <img class="card-img"  src="./imagens/celular-pessoa.png">
                                                  <div class="card-body">
                                                      <a href=""><h4 class="card-titulo">6 - </h4></a>
                                                      <p class="card-texto branco">Com texto de apoio abaixo como uma introdução natural para conteúdo adicional.</p>
              
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                              <div class="card">
                                                  <img class="card-img"  src="./imagens/maquina-cartao.png">
                                                  <div class="card-body">
                                                      <a href=""><h4 class="card-titulo">7 - </h4></a>
                                                      <p class="card-texto branco">Com texto de apoio abaixo como uma introdução natural para conteúdo adicional.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                            <div class="card">
                                                <img class="card-img"  src="./imagens/maquina-cartao.png">
                                                <div class="card-body">
                                                    <a href=""><h4 class="card-titulo">8 - </h4></a>
                                                    <p class="card-texto branco">Com texto de apoio abaixo como uma introdução natural para conteúdo adicional.</p>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <!--Botoes- carosel-->
                      <div class="col-md-12 text-center">
                        <a class="btn btn-carosel" href="#carousel-corpo" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn-carosel  " href="#carousel-corpo" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-md-12 text-center">
                <button class="btn-payapp-corpo text-center branco ">Compre Agora</button>
            </div>
        </div>    
</section> <!--Corpo 2-->

    <!--Discover-->
    <section class="mt-5 anime anime-start">
        <div class="container">
            <div class="row">
                <div class="col-md-6 azul">
                    <h2 >Sobre Nós</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate 
                    </p>
                    <button class="btn-payapp-corpo branco">Download Now</button>
                </div>
                     
                <div class="col-md-6 preto">
                    <img src="./imagens/maos-unidas-maior.png" class="w-75">    
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5">
            <div class="row">                   
                <div class="col-md-6 preto pr-4 text-right ">
                    <img src="./imagens/maquina-cartao-maior.png" class="w-75">    
                </div>

                <div class="col-md-6 azul text-left ">
                    <h2 >Nosso Trabalho</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate 
                    </p>
                </div>
            </div>
        </div>
    </section> <!--Fim discovery-->


    <!--Zona Azul-->
    <section class="zona-azul" >
        <div class=" container pb-5">
            <div class="col-md-12 w-50 m-auto pt-4 text-center branco">
                <h2 >Nossa Companhia</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut </p>      
            </div>
            <div >
                <img src="./imagens/maquina-cartao-luvas.png" class="col-md-12">
            </div>
               
    </section>
    <!-- Fim zona Azul-->

    <!--Blog-->
    <section id="blog" class="mb-4 ">
        <div class="container">
            <div class="col-md-12 w-50 m-auto pt-4 text-center azul">
                <h2>Blog</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12"></div>
                        <div class="col-md-4 m-auto pt-4 text-center ">
                            <div class="w-25 card-img">
                                <img src="./imagens/maos-blog.png" alt="">
                            </div>
                            <div class="m-auto text-center azul blog  ">
                                <h3>Blog Post 1</h3>
                                <a href="">Leia mais</a>
                            </div>
                        </div>
                        <div class="col-md-4 m-auto pt-4 ">
                            <div class="w-25 text-center card-img">
                                <img src="./imagens/maos-blog.png" alt="">
                            </div>
                            <div class="m-auto text-center azul blog">
                                <h3>Blog Post 2</h3>
                                <a href="">Leia mais</a>
                            </div>
                        </div>
                        <div class="col-md-4 m-auto pt-4 text-center ">
                            <div class="w-25 card-img">
                                <img src="./imagens/maos-blog.png" alt="">
                            </div>
                            <div class="m-auto text-center azul blog">
                                <h3>Blog Post 3</h3>
                                <a href="">Leia mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--Fim Blog-->
    
    <!--Notícias-->
    <section id="newsletter" class="m-auto">
        <div class="container">
            <div class="col-md-12  m-auto pt-4 text-center ">
                <div class="row">
                  <div class="col-md-6 mt-5">
                    <div class="col-md-8 text-left azul ">
                        <div class="pl-3">
                            <h2>Notícias</h2>
                        </div>
                        <div >
                            <p>Lorem ipsum dolor sit amet, 
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua. Ut enim ad minim </p>
                        </div>    
                        <div class="col-md-12 text-left mb-4">
                            <button class="btn-payapp-corpo text-center branco">Subscribe!</button>
                        </div>
                    </div>
                  </div>  
                  <div class="col-md-6 zona-azul-redonda pb-4 pt-4">
                        <div class="branco">
                            <h2>Envie suas Dúvidas</h2>
                        </div>
                        <div class="branco mt-3">    
                            <form action="/contato" methodo = "POST" class="container" >
                                <div class="form-group text-left">
                                    <div class="mt-3 mb-3">
                                        <input type="name" class="visually-hidden" id="name" placeholder="Nome" >
                                        <input type="sobrenome" class="visually-hidden " id="sobrenome" placeholder="Sobrenome">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                      </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-payapp-corpo">Enviar</button>
                                </div>
                            </form>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </section><!--Fim Notícias-->
    
    <!--Contatos-->
    <section >
        <div class="container contato" >
            <div class="row azul col-md-12 w-50 m-auto pt-4">
                    <div class=" m-auto ">
                        <h2>Contato</h2>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, 
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua. Ut enim ad minim </p>
                    </div>  
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13400.617009986203!2d-60.07488151039522!3d-3.0873947110120445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926c11b4d40a6f03%3A0x333f25f54b616baf!2sShopping%20Ponta%20Negra!5e0!3m2!1spt-BR!2sbr!4v1642722124126!5m2!1spt-BR!2sbr"  allowfullscreen="" loading="lazy" class="mapa w-100"></iframe>
                
            </div>
            <div class="preto w-25 m-auto text-center mb-5">
                <p>Company Name</p>
                <p>    St Name Street, City,</p>
                <p>    Country</p>
                <p>    +00 123 456 789</p>
            </div>
        </div>
        
    </section> <!--Fim Contatos-->

@endsection