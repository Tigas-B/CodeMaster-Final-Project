    <?php
    $pagina_n = 1;
    $total_paginas_n = totalPaginasNoticias();
    if(!empty($_GET["pagina"])){   
        $pagina_n = intval($_GET["pagina"]);
        if($pagina_n < 1){$pagina_n=1;}
        elseif($pagina_n > $total_paginas_n){$pagina_n = $total_paginas_n;}
    }
    
    $noticias =  noticiasPagina($pagina_n);
    ?>
    <main class="container rolar">
        <div class="row">
            <div class="col text-center">
                <hr class="especial mt-5 mb-3 my-md-5">
                <h1>Notícias</h1>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 my-auto px-4 px-md-0 mt-4 mt-md-5 d-flex flex-wrap justify-content-center column-gap-4 row-gap-5">
                
                <?php foreach($noticias as $n): ?>          
                    <div class="board h-100">
                        <img src="<?= $n["imagem"]; ?>" class="card-img-top" alt="<?= $n["imagem"]; ?>">
                        <div class="board-body py-4 px-3 px-md-5">
                            <div>
                                <h5 class="board-title"><?= $n["titulo"]; ?></h5>
                                <?= $n["texto"]; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>  
                
            </div>
        </div>
        <div class="row mt-4 pt-3">
        <div class="col paginas d-flex justify-content-center align-items-center gap-2">

                <a href="noticias.php?pagina=<?= $pagina_n-1;?>"><</a>     

                <?php for($i=1; $i<=$total_paginas_n; $i++): ?>
                    <a href="noticias.php?pagina=<?= $i;?>" class="<?= ($pagina_n == $i) ? "active" : ""; ?>"><?= $i;?></a>
                <?php endfor; ?>
                
                <a href="noticias.php?pagina=<?=$pagina_n+1;?>">></a>
            </div>
        </div>
    </main>