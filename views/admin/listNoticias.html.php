<div class="list-noticias">
    <?php foreach($noticias as $noticia): ?>
        <blockquote>
            <h3><?= $noticia['title'] ?></h3>
            <div>
                <a href="/admin/edit/noticias?title=<?= $noticia['title']?>">Editar</a>
                <form action="" method="post">
                    <input type="hidden" name="title" value="<?= $noticia['title']?>">
                    <button type="submit">BORRAR</button>
                </form>
            </div>
        </blockquote>
    <?php endforeach; ?>
</div>