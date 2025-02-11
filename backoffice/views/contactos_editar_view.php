    <?php
    $contactos = todosContactos();

    if(!empty($_GET["telefone"]) && !empty($_GET["morada"]) && !empty($_GET["email"]) && !empty($_GET["facebook"])){
        $telefone = $_GET["telefone"];
        $morada = $_GET["morada"];
        $email = $_GET["email"];
        $fax = $_GET["fax"];
        $facebook = $_GET["facebook"]; 
        $editor = $_SESSION["usuario"]["nome"];
        $data_de_edicao = date("H:i:s - d/m/Y");
        iduSQL("UPDATE contactos SET telefone ='$telefone', morada='$morada', email='$email', fax='$fax', facebook='$facebook', editor='$editor', data_de_edicao='$data_de_edicao'");
        header("Location: contactos.php");
        exit();
    }
    ?>
    <main class="container">
        <div class="row">
            <div class="col my-4 text-center">
                <h1>Contactos - Editar</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col mb-5">
                <form>
                    <?php foreach($contactos as $c): ?> 
                        <label for="telefone" class="contactos">Telefone: </label>
                        <input type="text" name="telefone" placeholder="Telefone" size="50" value="<?= $c["telefone"]; ?>">
                        <br><br>
                        <label for="morada" class="contactos">Morada: </label>
                        <input type="text" name="morada" placeholder="Morada" size="50" value="<?= $c["morada"]; ?>">
                        <br><br>
                        <label for="email" class="contactos">Email: </label>
                        <input type="text" name="email" placeholder="E-mail" size="50" value="<?= $c["email"]; ?>">
                        <br><br>
                        <label for="fax" class="contactos">Fax: </label>
                        <input type="text" name="fax" placeholder="Fax" size="50" value="<?= $c["fax"]; ?>">
                        <br><br>
                        <label for="facebook" class="contactos">Facebook: </label>
                        <input type="text" name="facebook" placeholder="Facebook" size="50" value="<?= $c["facebook"]; ?>">
                        <br><br>
                        <input type="submit" class="btn btn-outline-warning" value="Editar">
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </main>