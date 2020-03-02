<?php
ob_start();
session_start();

include('includes/topo.php');

if ($_POST["enviar"] == "") {

$id = $_GET['id'];
$consulta = $conexao->query("SELECT * FROM acessos WHERE id = '$id'");
$count = $consulta->rowCount();
if ($count == "0"){
header("location: index.php");
}else{
$linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>

	<h1 class="page-header">Acessos</h1>

<div class="panel panel-default">
	<div class="panel-heading">
		APAGAR - Acesso
	</div>
<form role="form" method="post" action="<?php $_SERVER['SCRIPT_NAME']; ?>" onSubmit="return valida_dados(this)">
	<div class="panel-body">
	Tem certeza que deseja apagar:
    <br>
    <strong><?php echo $linha['nome']; ?></strong>
    <br><br>
<input name="id" type="hidden" value="<?php echo $linha['id']; ?>" />
<input type="hidden" value="OK" name="enviar">
<button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Sim</button>
<a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-danger"><span class="fa fa-chevron-left"></span> Não</button></a>
    </div>
</form>
</div>

<?php
}
}else{

$id = $_POST["id"];

$excluir = "delete from acessos where id='$id'";
$conexao->exec($excluir);

header("location: acessos.php?act=del");

}

include('includes/rodape.php');
?>
