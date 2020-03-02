<?php
ob_start();
session_start();

include('includes/topo.php');

if ($_SESSION["niveluser"] <> '50') {
header("location: index.php");
}
?>

	<h1 class="page-header">Acessos <a href="acessos-adicionar.php"><button type="button" class="btn btn-success"><span class="fa fa-plus-square"></span> Adicionar</button></a></h1>

<?php if ($_GET['act'] <> "") { ?>
<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php if ($_GET['act'] == "add") { ?>
  <i class="fa fa-check"></i> Adicionado com sucesso.
  <?php } ?>
  <?php if ($_GET['act'] == "edit") { ?>
  <i class="fa fa-check"></i> Alterado com sucesso.
  <?php } ?>
  <?php if ($_GET['act'] == "del") { ?>
  <i class="fa fa-check"></i> Apagado com sucesso.
  <?php } ?>
</div>
<?php } ?>

<div class="panel panel-default">
	<div class="panel-heading">
		Acessos Cadastrados
	</div>

		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>Nome</th>
						<th class="some-mobile">Login</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
<?php
$id = $_SESSION["iduser"];
$consulta = $conexao->query("SELECT * FROM acessos ORDER BY id DESC");
$count = $consulta->rowCount();
if ($count <> "0"){
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
?>
					<tr class="odd gradeX">
						<td>
						  <?php echo $linha['nome']; ?>
						</td>
						<td class="some-mobile">
						  <?php echo $linha['login']; ?>
                        </td>
						<td>
                        <div class="pull-right">
                        <a href="acessos-edit.php?id=<?php echo $linha['id']; ?>"><button type="button" class="btn btn-default btn-warning btn-sm" style="min-width:35px; margin-bottom:3px;"><span class="fa fa-pencil"></span> <span class="some-mobile">Editar</span></button></a>
                        <a href="acessos-apagar.php?id=<?php echo $linha['id']; ?>"><button type="button" class="btn btn-default btn-danger btn-sm" style="min-width:35px; margin-bottom:3px;"><span class="fa fa-trash-o"></span> <span class="some-mobile">Apagar</span></button></a>
                        </div>
                        </td>
					</tr>
<?php }} ?>
				</tbody>
			</table>
			</div>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.panel -->


<?php include('includes/rodape.php'); ?>
