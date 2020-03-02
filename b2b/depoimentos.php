<?php
ob_start();
session_start();

include('includes/topo.php');
?>

	<h1 class="page-header">Depoimentos <a href="depoimentos-adicionar.php"><button type="button" class="btn btn-success"><span class="fa fa-plus-square"></span> Adicionar</button></a></h1>

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
		Depoimentos Cadastrados
	</div>

		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>Data</th>
						<th>Nome</th>
						<th>Aprovado</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
<?php
$consulta = $conexao->query("SELECT * FROM depoimentos ORDER BY id DESC");
$count = $consulta->rowCount();
if ($count <> "0"){
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
?>
					<tr class="odd gradeX">
						<td>
							<span style="display: none;"><?php echo $linha['data']; ?></span>
						  <?php echo date("d/m/Y", strtotime($linha['data'])); ?>
						</td>
						<td>
						  <?php echo $linha['nome']; ?>
						</td>
						<td>
						  <?php
								if($linha['mostrar'] == 'S'){ echo 'SIM'; }else{ echo 'NÃO'; }
							?>
						</td>
						<td>
            	<div class="pull-right">
            		<a href="depoimentos-edit.php?id=<?php echo $linha['id']; ?>"><button type="button" class="btn btn-default btn-warning btn-sm" style="min-width:35px; margin-bottom:3px;"><span class="fa fa-pencil"></span> <span class="some-mobile">Editar</span></button></a>
            		<a href="depoimentos-apagar.php?id=<?php echo $linha['id']; ?>"><button type="button" class="btn btn-default btn-danger btn-sm" style="min-width:35px; margin-bottom:3px;"><span class="fa fa-trash-o"></span> <span class="some-mobile">Apagar</span></button></a>
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
