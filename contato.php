<?php
$titulo = 'Contato - Villa do Éden';
$descricao = 'Para informações, reservas e outros assuntos entre em contato conosco.';
$pagina = 'contato';

include 'include/header.php';?>

    <!-- Main -->
    <main>
        <div class="container">
            <section>
                <div class="">
                    <h1 class="titlepage">Contato</h1>

                    <div class="col-sm-7 textpage" >
                        <br>

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

                    <div class="col-sm-5" style="margin-top: 50px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.5470667175196!2d-46.64467228454444!3d-22.521170785209307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c91732ac2b1b8f%3A0xcd5e2c0ea24e84fe!2sA+Leste+Eden+Com%C3%A9rcio+Empreendimentos!5e0!3m2!1spt-BR!2sbr!4v1476879853118" width="100%" height="580" frameborder="0" style="border:0" m allowfullscreen></iframe></iframe>
                    </div>

                    <div class="clearfix"></div>
                    <br>
                    <div id="result" class="text-center"></div>

                </div>
            </section>
        </div>
    </main>

<?php include 'include/footer.php';?>