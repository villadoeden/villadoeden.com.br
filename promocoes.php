<?php
$titulo = 'Promoções - Villa do Éden';
$descricao = 'Confira nossos Pacotes.';
$pagina = 'promocoes';

include 'include/header.php';?>

    <main>

        <div class="container">

            <h1 class="titlepage">Promoções</h1>
            <p class="text-center">Confira nossas promoções</p>.

            <?php if($quantidadepacotes <> '0'){ ?>
                <section>

                    <div class="container gloria-texto" style="color: #747474; font-size: 16px; font-weight: bold" >

                        <h3 style="margin-top:-20px;"> </h3>

                        <div class=" col-sm-4">
                            <ul class="menu-pacotes list-unstyled">
                                <?php
                                for ($n = 1; $n <= $quantidadepacotes; $n++) {
                                    $nomepacote = $idpacote[$n]['nomepacote'];
                                    $linkpacote = str_replace("- ", "", $nomepacote);
                                    $linkpacote = strtolower(retira_acentos(str_replace(" ", "-", $linkpacote)));
                                    ?>
                                    <a href="<?php echo $diretoriosite; ?>promocoes/<?php echo $n; ?>/<?php echo $linkpacote; ?>">
                                        <li><span href=""><?php echo $nomepacote; ?></span></li>
                                    </a>
                                <?php } ?>
                            </ul>


                        </div>

                        <?php
                        if ($_GET['id'] == '') {
                            $pacoteaberto = 1;
                        } else {
                            $pacoteaberto = $_GET['id'];
                        }
                        $nomepacote = $idpacote[$pacoteaberto]['nomepacote'];
                        $descricaopacote = $idpacote[$pacoteaberto]['descricaopacote'];
                        $imagem1pacote = $idpacote[$pacoteaberto]['imagem1'];
                        $imagem2pacote = $idpacote[$pacoteaberto]['imagem2'];
                        $modalpacote = str_replace("- ", "", $nomepacote);
                        $modalpacote = strtolower(retira_acentos(str_replace(" ", "-", $modalpacote)));
                        ?>

                        <div class=" col-sm-8">
                            <div class="row">
                                <a href="<?php echo $diretoriosite; ?><?php echo $imagem2pacote; ?>" rel="ilightbox[pacote]" >
                                    <img src="<?php echo $diretoriosite; ?><?php echo $imagem1pacote; ?>" title="<?php echo $nomepacote; ?>" alt="Imagem - <?php echo $nomepacote; ?>" class="img-responsive"/>
                                </a>
                            </div>
                            <p class="text-center" style="font-size: 16px; font-weight: normal; line-height: 26px;"><br>
                                Clique na imagem para ampliar
                            </p>
                            <p>
                                <?php echo $descricaopacote; ?>
                            </p>
                        </div>
                        <div class="clearfix"></div>


                    </div>
                </section>
            <?php } ?>

            <section>
                <div class="">

                    <div class="col-sm-5 hidden-xs"> </div>



                    <div class="col-sm-7 textpage" >


                        <h1 class="titlepage text-center" style="padding: 0; margin: 0; font-weight: bold">Contato</h1>

                        <p class="text-center">Para obter mais informações, utilize o formulário.</p>



                        <div class="form-banner">
                            <h1 class="h1-form-banner text-center">Solicite um orçamento</h1>
                            <div class="wrap-form-banner">
                                <!--<form id="contact_form">-->
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

                        </div>

                    </div>
                </div>
            </section>


            <!--
                        <div class="col-md-6 col-xs-12">
                            <a href="assets/images/promocao/agosto2018.jpg" rel="ilightbox[standart]" data-caption="">
                                <img src="assets/images/promocao/agosto2018.jpg" class="img-responsive"  alt="">
                            </a>
                            <br><br>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <a href="assets/images/promocao/aniversariantesagosto2018.jpg" rel="ilightbox[standart]" data-caption="">
                                <img src="assets/images/promocao/aniversariantesagosto2018.jpg" class="img-responsive"  alt="">
                            </a>
                            <br><br>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <a href="assets/images/promocao/7-setembro-2018.jpg" rel="ilightbox[standart]" data-caption="">
                                <img src="assets/images/promocao/7-setembro-2018.jpg" class="img-responsive"  alt="">
                            </a>
                            <br><br>
                        </div>

                  <div class="col-md-6 col-xs-12">                         <a href="assets/images/promocao/natal.jpg" rel="ilightbox[standart]" data-caption="">
                                <img src="assets/images/promocao/natal.jpg" class="img-responsive"  alt="">
                            </a>
                            <br><br>
                        </div>
            <!--
                        <br><br>
                        <img src="assets/images/promocao/aniversario.jpg" class="center-block img-responsive"  alt="">
                        <p class="text-center">Regras: Promoção aniversariante a partir de 02 diárias, exceto meses de janeiro, julho e dezembro, feriados e pacotes festivos. </p>
                        <div class="rev_slider_wrapper">
                            <div id="slider2" class="rev_slider"  data-version="5.0">
                                <ul>

                                    <li data-thumb="assets/images/promocao/pais-2018.jpg" data-param1="" data-rotate="0" data-saveperformance="off" data-title="Dia dos Pais">
                                        <img src="assets/images/promocao/pais-2018.jpg"  alt="">
                                    </li>
                                    <li data-thumb="assets/images/promocao/7-setembro-2018.jpg" data-param1="" data-rotate="0" data-saveperformance="off" data-title="Feriado 7 de Setembro">
                                        <img src="assets/images/promocao/7-setembro-2018.jpg"  alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
            -->
        </div>


    </main>


<?php include 'include/footer.php';?>
