<?php
ob_start();
session_start();

include('includes/topo.php');

if ($_POST["enviar"] == "") {
?>

	<h1 class="page-header">Acessos</h1>

<div class="panel panel-default">
	<div class="panel-heading">
		ADICIONAR - Acesso
	</div>
	<div class="panel-body">

<form name="formulario" role="form" method="post" action="<?php $_SERVER['SCRIPT_NAME']; ?>" id="subscribeForm">

<div class="form-group col-lg-12">
  <label class="obrigatorio">Nome *</label>
  <input class="form-control" name="nome" type="text" id="nome" maxlength="250" required title="Digite o Nome">
  <div style="height:5px; clear: both;"></div>
</div>

<div class="form-group col-lg-12">
  <label class="obrigatorio">Login *</label>
  <input class="form-control" name="login" type="text" id="login" maxlength="250" required title="Digite o Login">
  <div style="height:5px; clear: both;"></div>
</div>

<div class="form-group col-lg-12">
  <label class="obrigatorio">Senha *</label>
  <input class="form-control" name="senha" type="password" id="senha" maxlength="250" required title="Digite a Senha">
  <div style="height:5px; clear: both;"></div>
</div>

<div class="form-group col-lg-12">
  <label class="obrigatorio">Nível *</label>
  <div style="height:5px; clear: both;"></div>
  <select class="form-control" name="nivel" id="nivel" required title="Selecione o Nível">
    <option value="">Selecione o Nível</option>
    <option value="10">Usuário</option>
    <option value="50">WebMaster</option>
  </select>
</div>

<div  class="form-group col-lg-12">
  <label class="obrigatorio">Aprovado *</label>
  <br />
  <label class="radio-inline">
    <input type="radio" name="ativado" id="input1" required title="Selecione uma Opção" value="S" checked /> Sim
  </label>
  <label class="radio-inline">
    <input type="radio" name="ativado" id="input2" value="N" /> Não
  </label>
</div>

<div class="form-group col-lg-12">
<input type="hidden" value="OK" name="enviar">
<button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Enviar</button>
<button type="reset" class="btn btn-danger"><span class="fa fa-eraser"></span> Limpar</button>
</div>

</form>

    </div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
	$('#subscribeForm').validate();
</script>

<?php
}else{
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$ativado = $_POST["ativado"];
$nivel = $_POST["nivel"];

$insere="insert into acessos (nome, login, senha, ativado, nivel) values ('$nome', '$login', '$senha', '$ativado', '$nivel')";
$conexao->exec($insere);

header("location: acessos.php");
}

include('includes/rodape.php');
?>
