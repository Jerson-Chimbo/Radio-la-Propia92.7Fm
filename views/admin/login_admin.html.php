<div class="formulario">

<?php if(isset($error)): ?>

    <div class="error">
        <?= $error ?>
    </div>
<?php endif; ?>

    <form action="" method="post">
        <label for="cedula">Ingrese su cedula</label>
        <input type="text" name="cedula" >
        <label for="password">Ingrese su clave</label>
        <input type="password" name="password">
        <button type="submit">Ingresar</button>
    </form>
</div>
