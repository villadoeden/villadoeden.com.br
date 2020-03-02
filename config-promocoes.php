<?php
function retira_acentos($texto, $replace = array(), $delimiter = '-')
{
    if (!empty($replace)) {
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

$pathImage = "assets/images/promocao/";

$quantidadepacotes = 7;
$idpacote = array(

// INCIO PACOTE 
"1" => array(
    "nomepacote" => "Férias de Janeiro",
    //imagem slide
    "imagem1" => "{$pathImage}janeiro2019.jpg",
    //imagem vertical
    "imagem2" => "{$pathImage}janeiro20192.jpg",
    // S para slider Home - vazio "" para somente pág. promoções
    "slider" => "S",
    "descricaopacote" => "",
),// FINAL PACOTE      

// INCIO PACOTE 
    "2" => array(
        "nomepacote" => "Carnaval",
        //imagem slide
        "imagem1" => "{$pathImage}carnaval.jpg",
        //imagem vertical
        "imagem2" => "{$pathImage}carnaval2.jpg",
        // S para slider Home - vazio "" para somente pág. promoções
        "slider" => "S",
        "descricaopacote" => " ",
    ),// FINAL PACOTE      

// INCIO PACOTE 
    "3" => array(
        "nomepacote" => "Fevereiro dia de semana",
        //imagem slide
        "imagem1" => "{$pathImage}fev.jpg",
        //imagem vertical
        "imagem2" => "{$pathImage}fev2.jpg",
        // S para slider Home - vazio "" para somente pág. promoções
        "slider" => "S",
        "descricaopacote" => " ",
    ),// FINAL PACOTE      

// INCIO PACOTE 
    "4" => array(
        "nomepacote" => "Fevereiro fim de semana",
        //imagem slide
        "imagem1" => "{$pathImage}fev-fds.jpg",
        //imagem vertical
        "imagem2" => "{$pathImage}fev-fds2.jpg",
        // S para slider Home - vazio "" para somente pág. promoções
        "slider" => "S",
        "descricaopacote" => " ",
    ),// FINAL PACOTE      

    // INCIO PACOTE 
    "5" => array(
        "nomepacote" => "Pacote da Ressaca",
        //imagem slide
        "imagem1" => "{$pathImage}ressaca.jpg",
        //imagem vertical
        "imagem2" => "{$pathImage}ressaca2.jpg",
        // S para slider Home - vazio "" para somente pág. promoções
        "slider" => "S",
        "descricaopacote" => " ",
    ),// FINAL PACOTE      


// INCIO PACOTE 
"6" => array(
    "nomepacote" => "Março mês da Mulher",
    //imagem slide
    "imagem1" => "{$pathImage}mulher_slideshow.jpg",
    //imagem vertical
    "imagem2" => "{$pathImage}mulher_mailing.jpg",
    // S para slider Home - vazio "" para somente pág. promoções
    "slider" => "S",
    "descricaopacote" => " ",
),// FINAL PACOTE    


// INCIO PACOTE 
"1" => array(
    "nomepacote" => "Final de semana Mágico",
    //imagem slide
    "imagem1" => "{$pathImage}magico_slideshow.jpg",
    //imagem vertical
    "imagem2" => "{$pathImage}magico_mailing.jpg",
    // S para slider Home - vazio "" para somente pág. promoções
    "slider" => "S",
    "descricaopacote" => " ",
),// FINAL PACOTE    



// INCIO PACOTE 
    "7" => array(
        "nomepacote" => "Grupos",
        //imagem slide
        "imagem1" => "{$pathImage}grupos.jpg",
        //imagem vertical
        "imagem2" => "{$pathImage}grupos2.jpg",
        // S para slider Home - vazio "" para somente pág. promoções
        "slider" => "S",
        "descricaopacote" => "",
    ),// FINAL PACOTE      

);

?>