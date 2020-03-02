<!-- /.row -->
<div class="row">

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
<?php
$consulta = $conexao->query("SELECT * FROM depoimentos");
$count = $consulta->rowCount();
?>
                        <div class="huge"><?php echo $count; ?></div>
                        <div>Depoimentos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.row -->
