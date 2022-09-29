<?php
if(isset($_GET['p'])){
    $p = $_GET['p'];
    if($p == "inicio")
        include('content/pages/inicio.php');
    else if($p == "destaques")
        include('content/pages/destaques.php');
    else if($p == "resultados")
        include('content/pages/resultados.php');
    else
        include('content/pages/404.php');
}else if(isset($_GET['pesquisa'])){
    include('content/pages/pesquisa.php');
}else{
    include('content/pages/inicio.php');
}
?>