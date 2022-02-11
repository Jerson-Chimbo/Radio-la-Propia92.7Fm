<div class="formulario">

<?php if(isset($correcto)): ?>

    <div class="correcto">
        <?= $correcto ?>
    </div>
<?php endif; ?>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Ingrese Nombre del Servicio </label>
        <input type="text" name="nombre" required>
        <label for="">Ingrese el precio</label>
        <input type="number" name="precio" required>
        <label for="">Ingrese duracion del curso en horas</label>
        <input type="number" name="horas">
        <label for="">Ingrese los requisitos separados por comas</label>
        <input type="text" name="requisitos">
        <label for="">Ingrese primera imagen</label>
        <input type="file" name="imagen1">
        <label for="">Ingrese segunda imagen</label>
        <input type="file" name="imagen2">
        <label for="">Ingrese la descripcion</label>
        <textarea name="descripcion" id="" cols="30" rows="10" required></textarea>
        <button type="submit">Ingresar</button>
    </form>
</div>
