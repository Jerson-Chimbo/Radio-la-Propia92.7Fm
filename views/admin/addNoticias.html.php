<div class="formulario1">
    <?php if(isset($correcto)): ?>
    <div class="correcto">
        <?= $correcto; ?>
    </div>
    <?php endif; ?>
<form action="" method="post" enctype="multipart/form-data">
        <label for="titulo">Ingrese el Titulo de la Noticia</label>
        <input type="text" name="titulo" >
        <label for="Imagen">Ingrese la Imagen de la Noticia</label>
        <input type="file" name="imagen" />
        <label for="descripcion">Ingrese la Descripcion de la Noticia</label>
        <textarea name="descripcion"></textarea>
        <button type="submit">Guardar</button>
    </form>
</div>
