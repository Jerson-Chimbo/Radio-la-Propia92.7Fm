<div class="banner">
 <div class="capa"></div>
		<div class="info">
			<a href="/quienes-somos">Leer Màs</a>
		</div> 
        
</div>
		
</div>

                <div class="transmicion">
                    <div><h2>Aquí te presentamos la <span>Transmición en  vivo</span></h2></div>
                    <div class="reproductor">
                        <img src="/public/asset/img/personal.jfif" alt="">
                        <div class="audio">
                            <di class="audio-title">Radio La Propia 92.7FM</di>
                            <audio src="https://streamingecuador.net:9006/stream" controls></audio>
                        </div>
                    </div>
                </div>
                <div class="noticias">
                    <h2>Ultimas Noticias</h2>
                    <div class="presentacion-noticias">
                    <?php

use aplication\Utiles;

foreach($noticias as $value): ?>
                    <article>
                       <?php 
                            if(!empty($value['img'])):
                       ?>
                        <img src="/<?= $value['img'] ?>" alt="">
                        <?php else: ?>
                        <video src="/<?= $value['video'] ?>" controls></video>
                        <?php endif; ?>
                        <h2> <?= $value['title'] ?> </h2>
                        <div> <?php
                        $string = new Utiles($value['descripcion']);

                        echo $string->textReplace()  ?> </div>
                    </article>

                    <?php endforeach; ?>
                </div>
            </div>

               