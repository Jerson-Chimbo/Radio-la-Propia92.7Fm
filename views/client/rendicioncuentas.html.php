<?php foreach($datos as $dato): ?>
<div class="contenedor1" id="main">
<h3 style=" width:60%; margin: auto; border-radius:0; font-size: 1.4rem; margin-top: 2rem; height: 30px; margin-bottom: 2rem; line-height: 30px; ">RENDICION DE CUENTAS AÑO <?=$dato['year'] ?></h3>
<div class="contenedorpdfs">
<?php foreach($dato['pdfs'] as $pdf): ?>
                    <section>
                    <h2><a  target="_blank" href="/<?= $pdf['direccion'] ?>"><?= $pdf['title'] ?> </a></h2>
                    <a target="_blank" href="/<?= $pdf['direccion'] ?>"> <img src="/public/asset/img/pdf.png" alt="" > </a>
                    
                    </section>  
                    <?php endforeach ?>      
           
</div>
</div>
<?php endforeach ?>



<div class="contenedor1" id="main">
            <h3>LOS MEJORES VIDEOS DE RADIO LA PROPIA 92.7FM</h3>
</div>
<div class="servicos">
<div class="videos-list ">
            <?php foreach($videos as $video):?>
                    <section>
                        <h2><?= $video['title'] ?></h2>
                        <p><?= $video['descripcion'] ?? '' ?></p>
                    <video src="/<?= $video['direccion'] ?>" controls></video>
                    </section>
                    
            <?php endforeach ?>
        </div>
        </div>

        




</div>