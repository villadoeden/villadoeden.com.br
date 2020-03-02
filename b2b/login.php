<?php
ob_start();
session_start();

include('includes/abrir.php');

if ($_POST["enviar"] == "") {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $titulosite; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Social Buttons CSS -->
    <link href="css/plugins/social-buttons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                    	<?php if ($_SESSION["loginuser"] == "0") { ?>
                        <h3 class="panel-title" style="color:#F00; font-weight:bold; padding-bottom:7px;">Usuário ou senha incorreto</h3>
                    	<?php } ?>
                        <?php if ($_SESSION["msgerro"] <> "") { ?>
                        <h3 class="panel-title" style="color:#F00; padding-bottom:7px;"><?php echo $_SESSION["msgerro"];?></h3>
                        <?php } ?>
                        <h3 class="panel-title">Por favor faça o login!</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-signin" role="form" action="login.php" method="post" style="margin-bottom:5px;">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Login" name="login" type="login" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="password" type="password">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="hidden" name="enviar" value="OK">
                                <button name="submit" class="btn btn-lg btn-success btn-block" type="submit">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
<?php
}else{
$userid = $_POST["login"];
$passwd = $_POST["password"];

$consulta = $conexao->query("SELECT * FROM acessos WHERE login = '$userid' AND senha = '$passwd' AND ativado = 'S'");
$count = $consulta->rowCount();
if ($count == "0"){
  $_SESSION["loginuser"] = "0";
  header("location: login.php");
}else {
  $linha = $consulta->fetch(PDO::FETCH_ASSOC);
  $_SESSION["iduser"] = $linha['id'];
  $_SESSION["nomeuser"] = $linha['nome'];
  $_SESSION["niveluser"] = $linha['nivel'];
  $_SESSION["loginuser"] = "646198asfsdg979f87wek7t9b0n3";
  header("location: index.php");
}
}
?>
