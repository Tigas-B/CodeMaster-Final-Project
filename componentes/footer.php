    <?php
        $contactos = contactos();
    ?>
    <footer>
        <div class="row mx-0 text-center contactos">
            <div class="col-12 px-0 escuro">
                <div class="row mx-0">
                    <div class="col-12 mt-5 pt-lg-4">
                        <hr class="branca mt-4 mt-md-5"> 
                        <h1 class="mt-3 mb-4 my-lg-5 pb-lg-5 text-white">Contactos</h1>
                    </div>
                </div>
                <div class="row mx-0 gap-4 gap-lg-0 d-flex justify-content-center">
                    <div class="col-12 col-lg-3 p-0">
                        <img class="mt-3 my-lg-0" src="public/imagens/tel.svg" alt="">
                        <p class="mt-3 mt-lg-5 mb-0"><?= $contactos["telefone"]; ?></p>
                    </div>
                    <div class="col-12 col-lg-3 p-0">
                        <img class="mt-3 my-lg-0" src="public/imagens/loc.svg" alt="">
                        <p class="mt-3 mt-lg-5 mb-0 px-5 px-lg-0"><?= $contactos["morada"]; ?></p>
                    </div>
                    <div class="col-12 col-lg-3 p-0">
                        <img class="mt-3 my-lg-0" src="public/imagens/mail.svg" alt="">
                        <p class="mt-3 mt-lg-5 mb-0 px-4 text-break"><?= $contactos["email"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col my-3 px-0">
                <iframe class="mapa w-100" height="513" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24034.031766973774!2d-8.63619639928643!3d41.15080922977087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2465d04e5277a1%3A0x1a25f000e38c94e5!2sCooperativa%20Tripeira%2C%20Contumil%2C%20Porto!5e0!3m2!1spt-PT!2spt!4v1730742835095!5m2!1spt-PT!2spt" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row mx-0 text-center facebook">
            <div class="col pt-md-4 px-0 escuro">
                <img class="mt-5" src="public/imagens/facebook.svg" alt="">
                   <p class="mt-md-5 pt-md-2 pt-4 pb-2 mb-5">
                        <a class="text-decoration-none text-white" target="_blank" href="<?= $contactos["facebook"]; ?>">Siga-nos no Facebook</a>
                    </p>
                
                <hr>
                <div class="row mx-0 d-none d-xl-flex">
                    <div class="col px-0 offset-xl-3 offset-xxl-4">
                        <nav class="navbar navbar-expand-lg mt-4 ">
                            <div class="container-fluid px-0">
                                <div class="collapse navbar-collapse" id="navbarNavFooter">
                                    <ul class="navbar-nav ">
                                    <li class="nav-item ">
                                            <a class="nav-link <?= ($menu == "home") ? "active" : "" ?>" aria-current="page" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($menu == "quem_somos") ? "active" : "" ?>" href="quem_somos.php">Quem Somos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($menu == "socios") ? "active" : "" ?>" href="socios.php">Sócios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($menu == "noticias") ? "active" : "" ?>" href="noticias.php">Notícias</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($menu == "destaques") ? "active" : "" ?>" href="destaques.php">Destaques</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($menu == "empreendimentos") ? "active" : "" ?>" href="#" onclick="abrirMenu()">Empreendimentos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($menu == "centro_de_ferias") ? "active" : "" ?>" href="centro_de_ferias.php">Centro de Férias</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($menu == "contactos") ? "active" : "" ?>" href="contactos.php">Contactos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        </nav>   
                    </div>
                </div>
                <div class="row mx-0 d-none d-lg-flex d-xl-none">
                    <div class="col px-0 mt-4 pt-3">
                        <nav class="mx-auto d-flex justify-content-center gap-3 pb-3">
                            <a class="nav-link <?= ($menu == "home") ? "active" : "" ?>" href="index.php">Home</a>
                            <a class="nav-link <?= ($menu == "quem_somos") ? "active" : "" ?>" href="quem_somos.php">Quem Somos</a>
                            <a class="nav-link <?= ($menu == "socios") ? "active" : "" ?>" href="socios.php">Sócios</a>
                            <a class="nav-link <?= ($menu == "noticias") ? "active" : "" ?>" href="noticias.php">Notícias</a>
                            <a class="nav-link <?= ($menu == "destaques") ? "active" : "" ?>" href="destaques.php">Destaques</a>
                            <a class="nav-link <?= ($menu == "empreendimentos") ? "active" : "" ?>" href="#" onclick="abrirMenu()">Empreendimentos</a>
                            <a class="nav-link <?= ($menu == "centro_de_ferias") ? "active" : "" ?>" href="centro_de_ferias.php">Centro de Férias</a>
                            <a class="nav-link <?= ($menu == "contactos") ? "active" : "" ?>" href="contactos.php">Contactos</a>
                        </nav> 
                    </div>
                </div>
                <div class="row mx-0 offset-lg-1 px-4">
                    <div class="col text-lg-start px-5 mx-1 ms-md-5 mt-lg-2 mt-4 direitos">
                        Copyright &copy; <?= date("Y");?><a href="https://mediamaster.pt/" target="_blank"> Grupo Mediamaster</a>. Todos os direitos reservados.
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    
    
</body>
</html>