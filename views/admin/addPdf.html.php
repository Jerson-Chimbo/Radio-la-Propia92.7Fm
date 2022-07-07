<div class="formularioc ancho">
    <?php if(isset($correcto)): ?>
    <div class="correcto">
        <?= $correcto; ?>
    </div>
    <?php endif; ?>
<form action="" method="post" enctype="multipart/form-data">
        <label for="titulo">Ingrese el Titulo para el PDF</label>
        <input type="text" name="titulo" required >
        <label for="video">Ingrese el PDF</label>
        <input type="file" name="pdfs" accept= ".pdf" >
        <label for="">Ingrese al Año que pertenece el PDF</label>
        <input type="date" name="date" required >
        <button type="submit">Guardar</button>
    </form>
</div>