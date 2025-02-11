    <?php
    $pagina = 1;
    $total_paginas = totalPaginasDestaques();
    if(!empty($_GET["pagina"])){   
        $pagina = intval($_GET["pagina"]);
        if($pagina<1){$pagina=1;}
        elseif($pagina > $total_paginas){$pagina = $total_paginas;}
    }
    $destaques = destaquesPagina($pagina);
    ?>
    <main class="container rolar">              <!-- Classe Rolar está no JavaScript -->
        <div class="row">
            <div class="col text-center">
                <hr class="especial mt-5 mb-3 my-md-5">
                <h1>Destaques</h1>
            </div>
        </div>
        <div class="row mx-0 d-none d-sm-block">        <!-- Desktop -->
            <div class="col-12 my-auto px-0 mt-4 mt-md-5 d-flex flex-wrap justify-content-center column-gap-4 row-gap-5">
                <?php foreach($destaques as $d): ?>          
                    <div class="board h-100">
                        <img src="<?= $d["imagem"]; ?>" alt="<?= $d["imagem"]; ?>">
                        <div class="board-body px-4 pb-0 d-flex flex-column justify-content-between">
                            <div class="px-2 board-text">
                                <h5 class="board-title pt-4"><?= $d["titulo"]; ?></h5>
                                <p class="mb-0 d-none d-md-block"><?= substr(strip_tags($d["texto"]), 0, 400); ?>...</p>
                                <p class="mb-0 d-block d-md-none"><?= substr(strip_tags($d["texto"]), 0, 200); ?>...</p>
                            </div>
                            <div class="text-center">
                                <a href="destaque_especifico.php?id=<?= $d["id"]; ?>"><button type="button">Ver Mais</button></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>  
            </div>
        </div>
        <div class="row mx-0 d-block d-sm-none">        <!-- Mobile -->
            <div class="col-12 my-auto px-0 mt-4 mt-md-5 d-flex flex-wrap justify-content-center column-gap-4 row-gap-5">
                <?php foreach($destaques as $d): ?>          
                    <div class="card h-100">
                        <img src="<?= $d["imagem"]; ?>" class="card-img-top" alt="<?= $d["imagem"]; ?>">
                        <div class="card-body px-4 pb-0 d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title"><?= $d["titulo"]; ?></h5>
                                <p class="card-text"><?= substr(strip_tags($d["texto"]), 0, 80); ?>...</p>
                            </div>
                            <div class="text-center">
                                <a href="destaque_especifico.php?id=<?= $d["id"]; ?>"><button type="button">Ver Mais</button></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>  
            </div>
        </div>
        <div class="row mt-4 pt-3">
            <div class="col paginas d-flex justify-content-center align-items-center gap-2">
                <a href="destaques.php?pagina=<?= $pagina - 1;?>"><</a>     
                <?php for($i=1; $i<=$total_paginas; $i+=1): ?>
                    <a href="destaques.php?pagina=<?= $i;?>" class="<?= ($pagina == $i) ? "active" : "";?>"><?= $i;?></a>
                <?php endfor; ?>
                <a href="destaques.php?pagina=<?= $pagina + 1;?>">></a>
            </div>
        </div>
    </main>

   