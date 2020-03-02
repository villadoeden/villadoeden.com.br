<?php
ob_start();
session_start();

include('includes/topo.php');

if ($_POST["enviar"] == "") {
?>

	<h1 class="page-header">Depoimentos</h1>

<div class="panel panel-default">
	<div class="panel-heading">
		ADICIONAR - Depoimento
	</div>
	<div class="panel-body">

<form name="formulario" role="form" method="post" action="<?php $_SERVER['SCRIPT_NAME']; ?>" id="subscribeForm">

<div class="form-group col-lg-12">
  <label class="obrigatorio">Data *</label>
  <input class="form-control" name="data" type="date" id="data" maxlength="250" required title="Digite a Data" value="<?php echo date('Y-m-d'); ?>">
  <div style="height:5px; clear: both;"></div>
</div>


<div class="form-group col-lg-12">
  <label class="obrigatorio">Nome *</label>
  <input class="form-control" name="nome" type="text" id="nome" maxlength="250" required title="Digite a Nome">
  <div style="height:5px; clear: both;"></div>
</div>

<div class="form-group col-lg-12">
  <label class="obrigatorio">Depoimento *</label>
	<textarea name="depoimento" class="form-control" rows="8" required title="Digite a Depoimento"></textarea>
  <div style="height:5px; clear: both;"></div>
</div>

<div  class="form-group col-lg-12">
  <label class="obrigatorio">Aprovado *</label>
  <br />
  <label class="radio-inline">
    <input type="radio" name="mostrar" id="input1" required title="Selecione uma Opção" value="S" checked /> Sim
  </label>
  <label class="radio-inline">
    <input type="radio" name="mostrar" id="input2" value="N" /> Não
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
$data = $_POST["data"];
$depoimento = $_POST["depoimento"];
$nome = $_POST["nome"];
$mostrar = $_POST["mostrar"];

$insere="insert into depoimentos (data, depoimento, nome, mostrar) values ('$data', '$depoimento', '$nome', '$mostrar')";
$conexao->exec($insere);

header("location: depoimentos.php");
}

include('includes/rodape.php');
?>
