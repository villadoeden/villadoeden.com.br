<ul class="nav" id="side-menu">
	<li class="sidebar-search" style="color:#428BCA;">
    <img src="img/avatar.png" class="img-circle" style="height:30px; padding-right:5px;">
	<?php echo $_SESSION["nomeuser"]; ?>
	</li>
	<li><a href="depoimentos.php"><i class="fa fa-comments"></i> Depoimentos</a></li>
	<?php if ($_SESSION["niveluser"] <> '10') { ?>
	<li><a href="acessos.php"><i class="fa fa-users fa-fw"></i> Acessos</a>
	<?php } ?>
  <li><a href="index.php"><i class="fa fa-home fa-fw"></i> Página Inicial</a>
  <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Sair do sistema</a>
</ul>
