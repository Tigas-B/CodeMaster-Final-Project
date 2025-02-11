<?php
require_once("../requisitos.php");

if(!empty($_POST["login"]) && !empty($_POST["senha"])){
    if(login($_POST["login"], $_POST["senha"])){
        header("Location: home.php");
        exit();
    }
}        
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="../public/css/estilo_backoffice.css">

    <!-- Editor de Texto -->
    <script src="https://cdn.tiny.cloud/1/5z7av92t5br6bsn1ajdi3rum9s2wwjxjlu8och48b46zfa4v/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    
    <title>Backoffice</title>
</head>
<body>
    <header></header>
    <main class="container-fluid">
        <div class="row">
            <div class="col text-center my-5">
                <h1>Backoffice</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <form method="post">
                    <?php if(!empty($_POST["login"]) && !empty($_POST["senha"])): ?>
                        <h3 class="text-danger">Login Inválido</h3>
                    <?php endif; ?>
                    <input type="text" name="login" placeholder="Login" class="text-center" autofocus required>
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha" class="text-center" required>
                    <br><br>
                    <input type="submit" value="Aceder">
                </form>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>