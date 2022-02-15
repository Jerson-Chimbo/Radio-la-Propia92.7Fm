<div class="list-videos-delete">
    <?php foreach($videos as $video): ?>
        <blockquote>
            <h3><?= $video['title'] ?></h3>
            <div>
               <video src="/<?= $video['direccion'] ?>" controls></video>
                <form action="" method="post">
                    <input type="hidden" name="title" value="<?= $video['title']?>">
                    <button type="submit">BORRAR</button>
                </form>
            </div>
        </blockquote>
    <?php endforeach; ?>
</div>