    <?php    
    $contactos = contactos();
    $form = !empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["telefone"]) && !empty($_POST["assunto"]) && !empty($_POST["mensagem"]);
    if($form){

        $g_recaptcha_response = $_POST["g-recaptcha-response"];
        $chave_secreta = "6Ld1d7cqAAAAABsTedNNTGPBeZNVeB3z4sT4Y4IH";
        $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$chave_secreta&response=$g_recaptcha_response");
        $google = json_decode($resposta);

        if($google->sucess){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $assunto = $_POST["assunto"];
            $mensagem = $_POST["mensagem"];
            
            $headers = "MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n";
            $mensagem_final = "<ol>";
            $mensagem_final .= "<li>Nome: $nome</li>";
            $mensagem_final .= "<li>E-mail: $email</li>";
            $mensagem_final .= "<li>Telefone: $telefone</li>";
            $mensagem_final .= "<li>Mensagem: $mensagem</li>";
            $mensagem_final .= "</ol>";

            mail($contactos["email"], $assunto, $mensagem_final, $headers);
            $form_2 = isset($_POST["copia"]);
            if($form_2){mail($email, $assunto, $mensagem_final, $headers);}
        }
    }
    ?>
    <main class="container rolar">         <!-- Classe Rolar está no JavaScript -->
        <div class="row">
            <div class="col text-center">
                <hr class="especial mt-5 mb-3 my-md-5">
                <h1>Contactos</h1>
                <?php if($form && $google->sucess):?>
                    <?php if($form_2):?>
                        <h3 class="text-success">Foram Enviados os 2 E-mails com Sucesso!</h3>
                    <?php elseif(!$form_2): ?>
                        <h3 class="text-danger">E-mail Enviado com Sucesso!</h3>
                    <?php endif;?>
                <?php elseif(!$form && !$google->sucess): ?>
                    <h3 class="text-danger">E-mail Não Enviado!</h3>
                <?php endif;?>
            </div>
        </div>
        <div class="row mt-0 mt-md-5 px-4 px-lg-0 pt-3 contactos">
            <div class="col-12 col-lg-5 col-xl-4 offset-xl-1 offset-0">
                <h3 class="title-contactos mb-0">Morada</h3>
                <h3 class="info-contactos w-75"><b><?= $contactos["morada"]?></b></h3>
                <h3 class="title-contactos mt-3 mb-0">Telefone</h3>
                <h3 class="info-contactos">(+351) <?= $contactos["telefone"]?></h3>
                <h3 class="title-contactos mt-3 mb-0">FAX</h3>
                <h3 class="info-contactos">(+351) <?= $contactos["fax"]?></h3>
                <h3 class="title-contactos mt-3 mb-0">E-mail</h3>
                <h3 class="info-contactos"><?= $contactos["email"]?></h3>
            </div>
            <div class="col-12 col-lg-7">
                <form method="post">
                    <label for="nome" class="title-contactos">*Nome</label>
                    <br>
                    <input type="text" name="nome" class="ps-2 input-contactos" placeholder="Insira aqui o seu nome" required>
                    <br>
                    <label for="email" class="mt-3 title-contactos">*E-mail</label>
                    <br>
                    <input type="email" name="email" class="ps-2 input-contactos" placeholder="Insira aqui o seu e-mail" required>
                    <br>
                    <label for="telefone" class="mt-3 title-contactos">*Telefone</label>
                    <br>
                    <input type="number" name="telefone" class="ps-2 input-contactos" placeholder="Insira aqui o seu telefone" required>
                    <br>
                    <label for="assunto" class="mt-3 title-contactos">*Assunto</label>
                    <br>
                    <input type="text" name="assunto" class="ps-2 input-contactos" placeholder="Insira aqui o seu assunto" required>
                    <br>
                    <label for="mensagem" class="mt-3 title-contactos">*Mensagem</label>
                    <br>
                    <textarea name="mensagem" class="ps-2 pt-0 input-contactos" placeholder="Insira aqui a sua mensagem" required></textarea>
                    <div class="d-block d-lg-flex justify-content-between">
                        <div>
                            <p class="mt-3 mb-2 campos">* Campos de preenchimento obrigatório</p>
                            <div class="d-flex align-items-center">
                                <input type="checkbox" name="copia">
                                <label for="copia" class="ps-1 copia">Quero receber uma cópia desta mensagem no meu e-mail.</label>  
                            </div>
                        </div>  
                        <div class="g-recaptcha mt-4 mt-lg-0" data-sitekey="6Ld1d7cqAAAAAMPxkGGYmtt6jSUjO5SXkyKkbowK"></div>
                    </div>
                    <input type="submit" value="ENVIAR">
                </form>
            </div>
        </div>
    </main>