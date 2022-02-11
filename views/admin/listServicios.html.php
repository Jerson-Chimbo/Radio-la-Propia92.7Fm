<div class="list-noticias">
    <?php foreach($servicios as $servicio): ?>
        <blockquote>
            <h3><?= $servicio['nombre'] ?></h3>
            <div>
                <a href="/admin/edit/servicios?nombre=<?= $servicio['nombre']?>">Editar</a>
                <form action="" method="post">
                    <input type="hidden" name="nombre" value="<?= $servicio['nombre']?>">
                    <button type="submit">BORRAR</button>
                </form>
            </div>
        </blockquote>
    <?php endforeach; ?>
</div>