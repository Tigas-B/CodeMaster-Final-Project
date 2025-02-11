<?php

require_once("../requisitos.php");

if(!verificarLogin()){
    header("Location: index.php");
    exit();
}

if(!empty($_GET["apagar"])){
    $id= $_GET["apagar"];
    iduSQL("DELETE FROM destaques WHERE id= $id");
    header("Location: destaques.php");
}

?>