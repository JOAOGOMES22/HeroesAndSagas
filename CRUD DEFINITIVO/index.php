<?php

session_start();

include 'header.php';
include 'database.php';

if (isset($_SESSION['login'])){
    if (isset($_GET['pagina'])){
    $pagina= $_GET ['pagina'];
}else{
    $pagina= 'jogo';
}    
}else{
    $pagina= 'home';
}

if($pagina == 'jogo'){
    include 'jogo.php';
}else if($pagina == 'cadastro'){
    include 'cadastro.php';
}else if($pagina == 'serie'){
    include 'serie.php';
}else if($pagina == 'filme'){
    include 'filme.php';
}else{
    include 'home.php';
}

include 'footer.php';
?>