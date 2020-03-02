<?php
include 'b2b/includes/abrir.php';

$titulo = 'Avaliações - Villa do Éden';
$descricao = 'Confira as avaliações deixadas por nossos hóspedes.';
$pagina = 'avaliacoes';

include 'include/header.php';?>

    <!-- Main -->
    <main>

        <h1 class="titlepage">Avaliações</h1>

        <div class="cd-testimonials-wrapper cd-container">
            <ul class="cd-testimonials list-unstyled">
<?php
$consulta = $conexao->query("SELECT * FROM depoimentos WHERE mostrar = 'S' ORDER BY data DESC LIMIT 3");
//$consulta = $conexao->query("SELECT * FROM depoimentos WHERE mostrar = 'S' ORDER BY RAND() LIMIT 3");
$count = $consulta->rowCount();
if ($count <> "0"){
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
$mesdepoimento = date("m", strtotime($linha['data']));
if($mesdepoimento == 1) {
$mesdepoimentoOK = 'Janeiro';
} if($mesdepoimento == 2) {
$mesdepoimentoOK = 'Fevereiro';
} if($mesdepoimento == 3) {
$mesdepoimentoOK = 'Março';
} if($mesdepoimento == 4) {
$mesdepoimentoOK = 'Abril';
} if($mesdepoimento == 5) {
$mesdepoimentoOK = 'Maio';
} if($mesdepoimento == 6) {
$mesdepoimentoOK = 'Junho';
} if($mesdepoimento == 7) {
$mesdepoimentoOK = 'Julho';
} if($mesdepoimento == 8) {
$mesdepoimentoOK = 'Agosto';
} if($mesdepoimento == 9) {
$mesdepoimentoOK = 'Setembro';
} if($mesdepoimento == 10) {
$mesdepoimentoOK = 'Outubro';
} if($mesdepoimento == 11) {
$mesdepoimentoOK = 'Novembro';
} if($mesdepoimento == 12) {
$mesdepoimentoOK = 'Dezembro';
}
?>
                <li>
                    <p><?php echo nl2br($linha['depoimento']); ?></p>
                    <div class="cd-author">
                        <img src="assets/images/avatar-1.jpg" >
                        <ul class="cd-author-info list-unstyled">
                            <li><?php echo $linha['nome']; ?></li>
                            <li><?php echo $mesdepoimentoOK; ?> <?php echo date("Y", strtotime($linha['data'])); ?></li>
                        </ul>
                    </div>
                </li>
<?php }} ?>
            </ul> <!-- cd-testimonials -->

            <a href="#0" class="cd-see-all">Ver Todos</a>
        </div> <!-- cd-testimonials-wrapper -->
        <div class="cd-testimonials-all">
            <div class="cd-testimonials-all-wrapper">
                <ul class="list-unstyled">

<?php
$consulta = $conexao->query("SELECT * FROM depoimentos WHERE mostrar = 'S' ORDER BY data DESC");
$count = $consulta->rowCount();
if ($count <> "0"){
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
$mesdepoimento = date("m", strtotime($linha['data']));
if($mesdepoimento == 1) {
$mesdepoimentoOK = 'Janeiro';
} if($mesdepoimento == 2) {
$mesdepoimentoOK = 'Feveriro';
} if($mesdepoimento == 3) {
$mesdepoimentoOK = 'Março';
} if($mesdepoimento == 4) {
$mesdepoimentoOK = 'Abril';
} if($mesdepoimento == 5) {
$mesdepoimentoOK = 'Maio';
} if($mesdepoimento == 6) {
$mesdepoimentoOK = 'Junho';
} if($mesdepoimento == 7) {
$mesdepoimentoOK = 'Julho';
} if($mesdepoimento == 8) {
$mesdepoimentoOK = 'Agosto';
} if($mesdepoimento == 9) {
$mesdepoimentoOK = 'Setembro';
} if($mesdepoimento == 10) {
$mesdepoimentoOK = 'Outubro';
} if($mesdepoimento == 11) {
$mesdepoimentoOK = 'Novembro';
} if($mesdepoimento == 12) {
$mesdepoimentoOK = 'Dezembro';
}
?>
                    <li class="cd-testimonials-item">
                        <p><?php echo nl2br($linha['depoimento']); ?></p>
                        <div class="cd-author">
                            <img src="assets/images/avatar-1.jpg" >
                            <ul class="cd-author-info list-unstyled">
                                <li><?php echo $linha['nome']; ?></li>
                                <li><?php echo $mesdepoimentoOK; ?> <?php echo date("Y", strtotime($linha['data'])); ?></li>
                            </ul>
                        </div> <!-- cd-author -->
                    </li>
<?php }} ?>

                </ul>
            </div>	<!-- cd-testimonials-all-wrapper -->

            <a href="#0" class="close-btn">Fechar</a>
        </div> <!-- cd-testimonials-all -->
        <center>
          <a href="avaliacao" class="btn btn-primary" role="button"><i class="fa fa-envelope"></i> Clique aqui e deixe seu depoimento</a>
        </center>

    </main>

<?php include 'include/footer.php';?>
