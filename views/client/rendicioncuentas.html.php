
<div class="contenedor1" id="main">
            <h3>LOS MEJORES VIDEOS DE RADIO LA PROPIA 92.7FM</h3>
</div>
<div class="servicos">
<div class="videos-list ">
            <?php foreach($videos as $video):?>
                    <section>
                        <h2><?= $video['title'] ?></h2>
                    <video src="/<?= $video['direccion'] ?>" controls></video>
                    </section>
                    
            <?php endforeach ?>
        </div>
        </div>