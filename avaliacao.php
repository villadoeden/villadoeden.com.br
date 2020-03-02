<?php
$titulo = 'Avaliação - Villa do Éden';
$descricao = 'Confira as avaliações deixadas por nossos hóspedes.';
$pagina = 'contato';

include 'include/header.php';?>

    <!-- Main -->
    <main>
        <div class="container">
            <section>
                <div class="">
                    <h1 class="titlepage">Avaliação</h1>

                    <div class="col-sm-8 col-sm-offset-2 textpage" >
                        <br>
                        <p>UTILIZE O FORMULÁRIO.</p>

                        <form action="<?php echo $diretoriosite; ?>avaliacao" method="post">
                            <div class="clearfix">
                                <div class="cf-left-col">

                                    <!-- Name -->
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="input-medium form-control" placeholder="Digite seu nome"  required>
                                    </div>

                                    <!-- Email -->
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="input-medium form-control" placeholder="Email" required>
                                    </div>

                                    <!-- Telefone -->
                                    <div class="form-group">
                                        <input type="text" name="telefone" id="telefone" class="input-medium form-control" placeholder="Telefone/Celular" required>
                                    </div>


                                    <!-- Message -->
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="input-md round form-control" style="height: 94px;" placeholder="Digite aqui sua pergunta ou mensagem."></textarea>
                                    </div>

                                </div>
                            </div>

                            <div class="clearfix">
                                <i class="fa fa-info-circle"></i> Preencha todos os campos<br><br>
                                <button class="btn btn-mod btn-medium btn-success" type="submit">ENVIAR AVALIAÇÃO</button>
                            </div>

                            <?php include 'email/contatoAval.php'; ?>

                        </form>
                    </div>

                    <div class="clearfix"></div>
                    <br>
                    <div id="result" class="text-center"></div>

                </div>
            </section>
        </div>
    </main>

<?php include 'include/footer.php';?>
