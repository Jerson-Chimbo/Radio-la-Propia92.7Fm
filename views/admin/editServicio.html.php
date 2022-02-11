<div class="formulario">
    <form action="" method="post">
        <label for="nombre">Nombre del Servicio</label>
        <input type="text" name="nombre" value="<?= $servicio['nombre'] ?>" >
        <label for="horas">Horas del servicio</label>
        <input type="number" name="horas" value="<?= $servicio['horas'] ?>" >
        <label for="precio">Precio total del servicio</label>
        <input type="number" name="precio" value="<?= $servicio['precio'] ?>" >
        <label for="requisitos">Requisitos del servicio</label>
        <input type="text" name="requisitos" value="<?= $servicio['requisitos'] ?>" >
        <label for="descripcion">Descripción</label>
       <textarea name="descripcion" id="" cols="30" rows="10"><?= $servicio['descripcion']?></textarea>
       <input type="hidden" name="idT" value="<?= $servicio['nombre'] ?>">
        <button type="submit">Guardar</button>
    </form>
</div>