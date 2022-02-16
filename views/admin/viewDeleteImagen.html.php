<div class="list-videos-delete">
    <?php foreach($imagenes as $imagen): ?>
        <blockquote>
            <div>
                <img src="/<?=$imagen ?>" alt="">
                <form action="" method="post">
                    <input type="hidden" name="foto" value="<?= $imagen?>">
                    <button type="submit">BORRAR</button>
                </form>
            </div>
        </blockquote>
    <?php endforeach; ?>
</div>