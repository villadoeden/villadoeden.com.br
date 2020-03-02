<?php
$titulo = 'Pousada Villa do Éden - Hospedagem em Lindóia SP';
$descricao = 'O Hotel Pousada Villa do Éden está localizada na cidade de Lindoia/SP dentro do Circuito das Águas, a cidade é conhecida nacionalmente pela qualidade de suas águas minerais, ...';

$pagina ='';

include 'include/header.php';?>

<!-- ========== START COPYING HERE ==========
<div id="popup-1" class="slickModal">
    <div class="slickWindow window" style="max-height: 90%">

        <img src="assets/images/promocao/7-setembro-2018.jpg" class="center-block" >

    </div>
</div>
<!-- ========== END COPYING HERE ========== -->

    <div class="lazer">
        <div class="container">

            <!--<h2>BEM VINDO Ao Paraíso</h2>

            <div class="col-md-6">
                <p>A <b>Villa do Éden</b> é um espaço para todas as idades, onde você encontra tranquilidade que precisa para descansar e momentos de lazer, oferece conforto e qualidade no atendimento ao hóspede.</p>
                <p><b>Villa do Éden</b> está localizada na cidade de Lindoia dentro do Circuito das Águas, a cidade é conhecida nacionalmente pela qualidade de suas águas minerais, oferece ao visitante o charme de uma pequena cidade do interior e com ótimas opções de lazer e gastronomia. Venha conhecer e se encantar.</p>
            </div>-->

            <h2>VILLA DO ÉDEN</h2>

            <div class="col-md-12">
            <p>A Villa do Éden é uma mistura de bom gosto e a beleza do campo, integrada ao meio urbano, com o charme e a harmonia da natureza, tudo pensado para unir o útil ao agradável e oferecer o máximo em custo beneficio e serviços qualificados, garantindo assim seu conforto, lazer, segurança e bem-estar.</p>
            <p>Villa do Éden é um lugar de atrações e atividades para toda família, além de um saboroso café da manhã com muitas opções e ingredientes selecionados, com produtos caseiros tipicamente da região.</p>
            <p>Destacamos também a localização privilegiada na cidade de Lindoia no Circuito das Águas Paulista, apenas 150 km de São Paulo e com fácil acesso pelas rodovias Fernão Dias, Dom Pedro e Anhanguera.</p>
            <p>A cidade é conhecida nacionalmente pela qualidade de suas águas minerais, oferece ao visitante o charme de uma pequena cidade do interior e com ótimas opções de lazer e gastronomia venha viver essa experiência.</p>
            </div>

            <div class="col-md-0">
<!--
                <img src="assets/images/lazer.jpg" class="center-block img-responsive"  style="margin-top:0px;" alt="Lazer e diversão Villa do Éden" title="Piscina Villa do Éden">
-->

                <!--<div class="form-banner">
                    <h1 class="h1-form-banner text-center">Solicite um orçamento</h1>
                    <div class="wrap-form-banner">
                        <form method="post" action="<?php echo $diretoriosite; ?>obrigado-cotacao">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nome" class="label-control ">Nome</label>
                                        <input type="text" class="form-control" required name="name" id="name" placeholder="Nome" value="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="telefone" class="label-control">Telefone</label>
                                        <input type="text" inputmode="numeric" required class="form-control " name="telefone" id="telefone" placeholder="Telefone" value="">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email" class="label-control">Email</label>
                                        <input type="email" class="form-control" required name="email" id="email" placeholder="Digite o seu e-mail" value="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="entrada" class="label-control">Entrada</label>
                                        <input type="date" class="form-control date hasDatepicker" required name="entrada" id="from" placeholder="Entrada" value="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="saida" class="label-control">Saída</label>
                                        <input type="date" class="form-control" name="saida" id="saida" placeholder="Saída" value="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="numero_adultos_f" class="label-control">Acomodação</label>
                                        <select name="quarto" id="numero_adultos_f" class="form-control">
                                            <option selected value="Gardênia">Gardênia</option>
                                            <option value="Gardênia Superior">Gardênia Superior</option>
                                            <option value="Hibisco">Hibisco</option>
                                            <option value="Azálea">Azálea</option>
                                            <option value="Chalé">Chalé</option>
                                            <option value="Casa de campo">Casa de campo</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="numero_adultos_f" class="label-control">Nº Adulto(s)</label>
                                        <select name="adultos" id="numero_adultos_f" class="form-control">
                                            <option selected value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="numero_criancas_zero_quatro_f" class="label-control">Nº Criança(s) 0 a 4 anos</label>
                                        <select name="criancas1" id="numero_criancas_zero_quatro_f" class="form-control">
                                            <option selected value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="numero_criancas_quatro_dez_f" class="label-control">Nº Criança(s) 5 a 11 anos</label>
                                        <select name="criancas2" id="numero_criancas_quatro_dez_f" class="form-control">
                                            <option selected value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="mensagem" class="label-control sr-only">*Mensagem</label>
                                        <textarea class="form-control" name="message" id="mensagem" placeholder="Sua mensagem..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="checkbox-group">
                                        <label for="newsletter" class="checkbox-group">
                                            <input type="checkbox" name="email_news" id="newsletter" value="sim" checked="">
                                            Deseja receber nossas novidades em seu e-mail?
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                    <button type="submit" id="submit_btn" class="btn btn-cta btn-block cta-form-banner button-form">ENVIAR</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="clearfix"></div>
                    <br>
                    <div id="result" class="text-center"></div>

                </div>-->

            </div>


            <!-- End Carousel -->
        </div>
    </div>


    <div class="main">
        <div class="container">

<!--

            <div class="col-md-8 col-md-offset-2">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XFSjFyWCskE?rel=0"></iframe>
              </div>
              <div style="height:50px;"></div>
            </div>
-->
            <div class="clearfix"></div>

            <h2>Sinta-se em casa!</h2>
            <p>Lazer e descanso para toda a família!<br>
                Integração e harmonia com a natureza</p>

            <!-- Carousel -->
            <div class="owl-carousel owl-theme" id="yspa" >
                <div class="item" style="margin:0 0 30px 0">
                    <a href="acomodacoes" data-caption="">
                        <img src="assets/images/carousel/2.jpg" class="img-responsive imginline"  alt="Confira as Acomodações do Villa do Éden" title="Acomodações Villa do Éden" />
                        <p>ACOMODAÇÕES</p>
                    </a>
                </div>

                <div class="item" style="margin: 0 0 30px 0">
                    <a href="lazer" data-caption="">
                        <img src="assets/images/carousel/1.jpg" class="img-responsive imginline"  alt="Lazer e descanso Villa do Éden" title="Lazer Villa do Éden" />
                        <p>LAZER</p>
                    </a>
                </div>

                <div class="item" style="margin:0 0 30px 0">
                    <a href="sitio" data-caption="">
                        <img src="assets/images/carousel/3.jpg" class="img-responsive imginline"  alt="Confira nosso Sítio Vale do Éden" title="Síto Vale do Éden" />
                        <p>SÍTIO VALE DO ÉDEN</p>
                    </a>
                </div>

            </div>
            <!-- End Carousel -->

            <p class="text-center" style="margin-bottom: 0">
                <strong>Informações de Check-In | Check-Out</strong><br>
                Check-In a partir das 18h e o check-out às 16h.<br>
                Caso necessite prolongar a estadia verifique a disponibilidade com a recepção.
            </p>
            
            <img style="position: relative; top: 60px" src="assets/images/nopet.png" class="center-block">

            <div style="height:70px;"></div>

<!--
            <ul class="list-inline text-center">
                <li style="margin-top: 10px;">
                    <a href="parceiros" class="link">
                        <figure>
                            <img src="assets/images/parceiros.jpg" title="Par" alt="Parceiros Villa do Éden" class="img-responsive" >
                            <figcaption>
                                ASSOCIE AGORA SUA EMPRESA E REPASSE NOSSAS VANTAGENS<br>
                                COMO BENEFÍCIOS AOS SEUS FUNCIONÁRIOS!
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li style="margin-top: 10px;">
                    <a href="avaliacoes" class="link">
                        <figure>
                            <img src="assets/images/avaliacoes.jpg" title="avaliações" alt="Avaliações Villa do Éden" class="img-responsive" >
                            <figcaption>
                                CONFIRA AS AVALIAÇÕES DEIXADAS POR NOSSOS HÓSPEDES<br>
                                OU ESCREVA O SEU DEPOIMENTO.
                            </figcaption>
                        </figure>
                    </a>
                </li>
            </ul>

-->
        </div>
    </div>



<?php include 'include/footer.php';?>