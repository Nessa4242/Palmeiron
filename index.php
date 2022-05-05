<?php include ("header.php"); ?>

<section class="fdez-banner">
    <div class="swiper-container swiper-main">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                    <img src="assets/img/banner.png" alt="Banner destaque">
            </div>
            <div class="swiper-slide">
                    <img src="assets/img/banner.png" alt="Banner destaque">
            </div>
            <div class="swiper-slide">
                    <img src="assets/img/banner.png" alt="Banner destaque">
            </div>
            <div class="swiper-slide">
                    <img src="assets/img/banner.png" alt="Banner destaque">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<section id="receitas" class="fdez-receitas">
    <div class="container-fluid">
        <h2 id="texto-principal">Receitinhas Palmeiron</h2>
        <h3>Dicas & Receitas</h3>
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="row">


                <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="menu-receitas nav-link active" id="dicas-tab" data-toggle="tab" href="#dicas" role="tab" aria-controls="dicas" aria-selected="true">Dicas</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="menu-receitas nav-link" id="cafe-da-manha-tab" data-toggle="tab" href="#cafe-da-manha" role="tab" aria-controls="cafe-da-manha" aria-selected="false">Café da manha</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="menu-receitas nav-link" id="almoco-tab" data-toggle="tab" href="#almoco" role="tab" aria-controls="almoco" aria-selected="false">Almoço</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="menu-receitas nav-link" id="jantar-tab" data-toggle="tab" href="#jantar" role="tab" aria-controls="Jantar" aria-selected="false">Jantar</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="menu-receitas nav-link" id="entradas-tab" data-toggle="tab" href="#entradas" role="tab" aria-controls="entradas" aria-selected="false">Entradas</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="menu-receitas nav-link" id="petiscos-tab" data-toggle="tab" href="#petiscos" role="tab" aria-controls="petiscos" aria-selected="false">Petiscos</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="menu-receitas nav-link" id="sopas-tab" data-toggle="tab" href="#sopas" role="tab" aria-controls="sopas" aria-selected="false">Sopas</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="menu-receitas nav-link" id="sucos-tab" data-toggle="tab" href="#sucos" role="tab" aria-controls="sucos" aria-selected="false">Sucos</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="dicas" role="tabpanel" aria-labelledby="dicas-tab">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    <div id="video-destaque" >
                                    <img id="video" src="assets/img/video.png" alt="video">
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu elementum.</h2>
                                    <img id="relogio-video" src="assets/img/relogio.png" alt="imagem">
                                    <P id="min-video" >15min</P>
                                    <img id="talheres-video" src="assets/img/talheres.png" alt="imagem">
                                    <p id="texto-video" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae, donec pharetra justo, dictum nisi. Congue massa dui justo hac est,...</p>
                                    </div>
                                </div>
                                <div class="col-md-7 col-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cafe-da-manha" role="tabpanel" aria-labelledby="cafe-da-manha-tab">
                        <div class="row">
                                <div class="col-md-5 col-12">
                                    <div id="video-destaque" >
                                    <img id="video" src="assets/img/video.png" alt="video">
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu elementum.</h2>
                                    <img id="relogio-video" src="assets/img/relogio.png" alt="imagem">
                                    <P id="min-video" >15min</P>
                                    <img id="talheres-video" src="assets/img/talheres.png" alt="imagem">
                                    <p id="texto-video" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae, donec pharetra justo, dictum nisi. Congue massa dui justo hac est,...</p>
                                    </div>
                                </div>
                                <div class="col-md-7 col-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="almoco" role="tabpanel" aria-labelledby="almoco-tab">
                        <div class="row">
                                <div class="col-md-5 col-12">
                                    <div id="video-destaque" >
                                    <img id="video" src="assets/img/video.png" alt="video">
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu elementum.</h2>
                                    <img id="relogio-video" src="assets/img/relogio.png" alt="imagem">
                                    <P id="min-video" >15min</P>
                                    <img id="talheres-video" src="assets/img/talheres.png" alt="imagem">
                                    <p id="texto-video" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae, donec pharetra justo, dictum nisi. Congue massa dui justo hac est,...</p>
                                    </div>
                                </div>
                                <div class="col-md-7 col-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="jantar" role="tabpanel" aria-labelledby="jantar-tab">
                        <div class="row">
                                <div class="col-md-5 col-12">
                                    <div id="video-destaque" >
                                    <img id="video" src="assets/img/video.png" alt="video">
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu elementum.</h2>
                                    <img id="relogio-video" src="assets/img/relogio.png" alt="imagem">
                                    <P id="min-video" >15min</P>
                                    <img id="talheres-video" src="assets/img/talheres.png" alt="imagem">
                                    <p id="texto-video" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae, donec pharetra justo, dictum nisi. Congue massa dui justo hac est,...</p>
                                    </div>
                                </div>
                                <div class="col-md-7 col-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="entradas" role="tabpanel" aria-labelledby="entradas-tab">
                        <div class="row">
                                <div class="col-md-5 col-12">
                                    <div id="video-destaque" >
                                    <img id="video" src="assets/img/video.png" alt="video">
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu elementum.</h2>
                                    <img id="relogio-video" src="assets/img/relogio.png" alt="imagem">
                                    <P id="min-video" >15min</P>
                                    <img id="talheres-video" src="assets/img/talheres.png" alt="imagem">
                                    <p id="texto-video" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae, donec pharetra justo, dictum nisi. Congue massa dui justo hac est,...</p>
                                    </div>
                                </div>
                                <div class="col-md-7 col-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="petiscos" role="tabpanel" aria-labelledby="petiscos-tab">
                        <div class="row">
                                <div class="col-md-5 col-12">
                                    <div id="video-destaque" >
                                    <img id="video" src="assets/img/video.png" alt="video">
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu elementum.</h2>
                                    <img id="relogio-video" src="assets/img/relogio.png" alt="imagem">
                                    <P id="min-video" >15min</P>
                                    <img id="talheres-video" src="assets/img/talheres.png" alt="imagem">
                                    <p id="texto-video" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae, donec pharetra justo, dictum nisi. Congue massa dui justo hac est,...</p>
                                    </div>
                                </div>
                                <div class="col-md-7 col-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sopas" role="tabpanel" aria-labelledby="sopas-tab">
                        <div class="row">
                                <div class="col-md-5 col-12">
                                    <div id="video-destaque" >
                                    <img id="video" src="assets/img/video.png" alt="video">
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu elementum.</h2>
                                    <img id="relogio-video" src="assets/img/relogio.png" alt="imagem">
                                    <P id="min-video" >15min</P>
                                    <img id="talheres-video" src="assets/img/talheres.png" alt="imagem">
                                    <p id="texto-video" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae, donec pharetra justo, dictum nisi. Congue massa dui justo hac est,...</p>
                                    </div>
                                </div>
                                <div class="col-md-7 col-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sucos" role="tabpanel" aria-labelledby="sucos-tab">
                        <div class="row">
                                <div class="col-md-5 col-12">
                                    <div id="video-destaque" >
                                    <img id="video" src="assets/img/video.png" alt="video">
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu elementum.</h2>
                                    <img id="relogio-video" src="assets/img/relogio.png" alt="imagem">
                                    <P id="min-video" >15min</P>
                                    <img id="talheres-video" src="assets/img/talheres.png" alt="imagem">
                                    <p id="texto-video" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae, donec pharetra justo, dictum nisi. Congue massa dui justo hac est,...</p>
                                    </div>
                                </div>
                                <div class="col-md-7 col-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="foto-comida" src="assets/img/comida.png" alt="imagem">
                                            <h2 id="texto-principal-comida" >Avocato toast</h2>
                                            <img id="relogio-comida" src="assets/img/relogio.png" alt="imagem">
                                            <P id="min-comida" >15min</P>
                                            <img id="talheres-comida" src="assets/img/talheres.png" alt="iamgem">
                                            <img id="luva" src="assets/img/luva.png" alt="imagem">
                                            <p id="texto-comida">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A adipiscing fermentum est faucibus. Eu condimentum integer erat ju...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fdez-comentarios">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-5">

                    </div>
                    <div class="col-md-7">
                        <div class="swiper-container swiper-main">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h2>“Essa é o melhor vinagre que já <br> comi em toda minha vida! Não<br> consigo parar de comer!!!” </h2>
                                    <p>Juliana Andrade, Recife.</p>
                                    <img src="assets/img/coracao.png" alt="imagem">
                                    <a href="" class="btn-verde">Avaliar</a>
                                </div>
                                <div class="swiper-slide">
                                    <h2>“Essa é o melhor vinagre que já <br> comi em toda minha vida! Não<br> consigo parar de comer!!!” </h2>
                                    <p>Juliana Andrade, Recife.</p>
                                    <img src="assets/img/coracao.png" alt="imagem">
                                    <a href="" class="btn-verde">Avaliar</a>
                                </div>
                                <div class="swiper-slide">
                                    <h2>“Essa é o melhor vinagre que já <br> comi em toda minha vida! Não<br> consigo parar de comer!!!” </h2>
                                    <p>Juliana Andrade, Recife.</p>
                                    <img src="assets/img/coracao.png" alt="imagem">
                                    <a href="" class="btn-verde">Avaliar</a>
                                </div>
                                <div class="swiper-slide">
                                    <h2>“Essa é o melhor vinagre que já <br> comi em toda minha vida! Não<br> consigo parar de comer!!!” </h2>
                                    <p>Juliana Andrade, Recife.</p>
                                    <img src="assets/img/coracao.png" alt="imagem">
                                    <a href="" class="btn-verde">Avaliar</a>
                                </div>
                                <div class="swiper-slide">
                                    <h2>“Essa é o melhor vinagre que já <br> comi em toda minha vida! Não<br> consigo parar de comer!!!” </h2>
                                    <p>Juliana Andrade, Recife.</p>
                                    <img src="assets/img/coracao.png" alt="imagem">
                                    <a href="" class="btn-verde">Avaliar</a>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="vinagre" class="fdez-vinagre">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <img id="vinagres" src="assets/img/vinagres.png" alt="imagem">
                    </div>
                    <div class="col-md-6 col-12">
                        <h2>Porque escolher o vinagre da Palmeiron.</h2>
                        <p>Basta cadastrar no campo abaixo o número do código de barras de um produto Palmeiron que você e sua família podem ganhar ingressos para a Paixão de Cristo e ainda curtir um jantar com o elenco. <br> Ainda dá tempo, acesse o link e concorra a essa super promoção!</p>
                        <ul>
                            <li>
                                <img class="circulo"" src="assets/img/circulo.png" alt="imagem">
                                <h3>Porque escolher o vinagre da <br> Palmeiron.</h3>
                            </li>
                            <li>
                                <img class="circulo"" src="assets/img/circulo.png" alt="imagem">
                                <h4>Porque escolher o vinagre da <br> Palmeiron.</h4>
                            </li>
                            <li>
                                <img class="circulo"" src="assets/img/circulo.png" alt="imagem">
                                <h5>Porque escolher o vinagre da <br> Palmeiron.</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ("footer.php"); ?>