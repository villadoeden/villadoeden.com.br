<?php
//INFORMA��ES DO BANCO
$host = "villadoeden.com.br"; //computador onde o servidor de banco de dados esta instalado
$user = "villadoe_site"; //seu usuario para acessar o banco
$pass = "yTUzwDhhavHg"; //senha do usuario para acessar o banco
$banco = "villadoe_site"; //banco que deseja acessar

$conexao = new PDO('mysql:host='.$host.';dbname='.$banco.';charset=utf8', $user, $pass);
// define para que o PDO lance exceções caso ocorra erros
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function retira_acentos($texto, $replace=array(), $delimiter='-') {
    if( !empty($replace) ) {
        $texto = str_replace((array)$replace, ' ', $texto);
    }
    setlocale(LC_ALL, 'en_US.utf8');
    $clean = iconv('utf-8', 'ascii//TRANSLIT', $texto);
    //$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $texto);
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
    return $clean;
}

$nomesite = 'Sistema Administrativo';
$titulosite = 'Sistema Administrativo';
?>
