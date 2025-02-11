<?php 

session_start();
date_default_timezone_set("Europe/Lisbon");

function login($login, $senha){
    $encontrado = selectSQLUnico("SELECT * FROM backoffice WHERE login= '$login' AND senha='$senha'");
    if(!empty($encontrado)){
        $_SESSION["usuario"] = $encontrado;
        $data_atual = date("H:i:s - d/m/Y");
        iduSQL("UPDATE backoffice SET ultimo_acesso='$data_atual' WHERE id=$encontrado[id]");
        return true;
    }
    else{return false;}
}

function verificarLogin(){return !empty($_SESSION["usuario"]);}

function logout(){session_destroy();}

?>