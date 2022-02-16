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
                    <h2>Las mejores noticias del momento</h2>
                    <?php

use aplication\Utiles;

foreach($noticias as $value): ?>
                    <article>
                        <img src="/<?= $value['img'] ?>" alt="">
                        <h2> <?= $value['title'] ?> </h2>
                        <div> <?php
                        $string = new Utiles($value['descripcion']);

                        echo $string->textReplace()  ?> </div>
                    </article>

                    <?php endforeach; ?>
                </div>

               