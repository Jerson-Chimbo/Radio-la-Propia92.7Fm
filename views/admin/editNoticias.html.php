<div class="formulario">
    <form action="/admin/edit/noticias" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="<?= $noticia['title'] ?>" >
        <label for="descripcion">Descripción</label>
       <textarea name="descripcion" id="" cols="30" rows="10"><?= $noticia['descripcion']?></textarea>
       <input type="hidden" name="idT" value="<?= $noticia['title'] ?>">
        <button type="submit">Guardar</button>
    </form>
</div>