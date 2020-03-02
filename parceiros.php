<?php
$titulo = 'Parceiros - Villa do Éden';
$descricao = 'Confira nosso parceiros.';
$pagina = 'parceiros';

include 'include/header.php';?>

    <!-- Main -->
    <main>
        <div class="container">
            <h1 class="titlepage">Parceiros</h1>

            <div class="item">

                <p style="font-size: 20px; line-height: 30px; text-align: center; font-weight: 100; margin-bottom: 30px;" >
                    Associe agora sua empresa e repasse nossas vantagens como benefícios aos seus funcionários!<br>
                    Nossos associados têm desconto especial ! Entre em contato conosco para conhecer melhor nossas promoções.
                </p>

                <div class="col-md-6">
                    <h3>Associados</h3>

                    <ul style="font-size: 16px; line-height: 30px; ">
                        <li>Jonhson & Jonhson</li>
                        <li>Homa Espaço Médico</li>
                        <li>Hospital São Rafael</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <br>
                    <h3>Associe sua empresa</h3>
                    <form class="contact-form" id="contact_form">
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
                                    <textarea name="message" id="message" class="input-md round form-control" style="height: 94px;" placeholder="Digite aqui sua mensagem."></textarea>
                                </div>

                            </div>
                        </div>

                        <div class="clearfix">
                            <i class="fa fa-info-circle"></i> Preencha todos os campos<br><br>
                            <button class="btn btn-mod btn-medium btn-success" id="submit_btn">ENVIAR</button>
                        </div>

                    </form>
                </div>




            </div>
            <div class="clearfix"></div>
        </div>


    </main>

<?php include 'include/footer.php';?>