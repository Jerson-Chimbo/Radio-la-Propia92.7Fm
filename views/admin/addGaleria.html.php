<div class="formularioc ancho">
<?php if(isset($correcto)): ?>
    <div class="correcto">
       
        <?= $correcto; ?>
      
    </div>
    <?php endif;?>
            <form action="" method="post" enctype="multipart/form-data">
            <label for="">Ingrese la Foto a Ingresar:</label>
        <input type="file" name="foto">
                                     <br>
                    <button type="submit">Guardar</button>
                  </form>
            </div>  