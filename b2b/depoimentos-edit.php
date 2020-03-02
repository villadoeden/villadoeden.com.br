<?php
ob_start();
session_start();

include('includes/topo.php');

if ($_POST["enviar"] == "") {

$id = $_GET['id'];
$consulta = $conexao->query("SELECT * FROM depoimentos WHERE id = '$id'");
$count = $consulta->rowCount();
if ($count == "0"){
header("location: index.php");
}else{
$linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>

	<h1 class="page-header">Depoimentos</h1>

<div class="panel panel-default">
	<div class="panel-heading">
		ALTERAR - Depoimento
	</div>
	<div class="panel-body">

<form name="formulario" role="form" method="post" action="<?php $_SERVER['SCRIPT_NAME']; ?>" id="subscribeForm">

<div class="form-group col-lg-12">
  <label class="obrigatorio">Data *</label>
  <input class="form-control" name="data" type="date" id="data" maxlength="250" required title="Digite a Data" value="<?php echo $linha['data']; ?>">
  <div style="height:5px; clear: both;"></div>
</div>

<div class="form-group col-lg-12">
  <label class="obrigatorio">Nome *</label>
  <input class="form-control" name="nome" type="text" id="nome" maxlength="250" required title="Digite a Nome" value="<?php echo $linha['nome']; ?>">
  <div style="height:5px; clear: both;"></div>
</div>

<div class="form-group col-lg-12">
  <label class="obrigatorio">Depoimento *</label>
	<textarea name="depoimento" class="form-control" rows="8" required title="Digite a Depoimento"><?php echo $linha['depoimento']; ?></textarea>
  <div style="height:5px; clear: both;"></div>
</div>

<div  class="form-group col-lg-12">
  <label class="obrigatorio">Mostrar *</label>
  <br />
  <?php if($linha['mostrar'] == 'S'){ ?>
  <label class="radio-inline">
    <input type="radio" name="mostrar" id="input1" required title="Selecione uma Opção" value="S" checked /> Sim
  </label>
  <label class="radio-inline">
    <input type="radio" name="mostrar" id="input2" value="N" /> Não
  </label>
  <?php }else{ ?>
  <label class="radio-inline">
    <input type="radio" name="mostrar" id="input1" required title="Selecione uma Opção" value="S" /> Sim
  </label>
  <label class="radio-inline">
    <input type="radio" name="mostrar" id="input2" value="N" checked /> Não
  </label>
  <?php } ?>
</div>

<div  class="form-group col-lg-12">
<input name="id" type="hidden" value="<?php echo $linha['id']; ?>" />
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
}
}else{
$data = $_POST["data"];
$depoimento = $_POST["depoimento"];
$nome = $_POST["nome"];
$mostrar = $_POST["mostrar"];
$id = $_POST["id"];

$editar = "update depoimentos set data='$data', depoimento='$depoimento', nome='$nome', mostrar='$mostrar' where id='$id'";
$conexao->exec($editar);

header("location: depoimentos.php?act=edit");

}

include('includes/rodape.php');
?>
