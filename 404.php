<?php
$titulo = '404 -  Villa do Eden';
$descricao = 'Página não encontrada.';
$pagina = '404';

include 'include/header.php';?>

<style>

    @import 'https://fonts.googleapis.com/css?family=Monoton';

    .board {
        position: relative;
        top: 50%;
        left: 50%;
        height: 600px;
        width: 500px;
        margin: 0 0 0 -250px;
        padding: 200px 20px 20px 20px;
        font: 75px/75px Monoton, cursive;
        text-align: center;
        text-transform: uppercase;
        text-shadow: 0 0 80px red, 0 0 30px FireBrick, 0 0 6px DarkRed;
        color: red;

    }

    #error {
        color: #fff;
        text-shadow: 0 0 80px #ffffff, 0 0 30px #008000, 0 0 6px #0000ff;
    }

</style>


    <div style="background: #141416">
        <div class="board">
            <p id="error">
                erro
            </p>
            <p id="code">
                404
            </p>
        </div>
    </div>


<?php include 'include/footer.php';?>

