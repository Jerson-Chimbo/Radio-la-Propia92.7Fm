<div class="formularioc ancho">
<?php if(isset($correcto)): ?>
    <div class="correcto">
       
        <?= $correcto; ?>
      
    </div>
    <?php endif;?>
            <form action="" method="post" enctype="multipart/form-data">
            <label for="">Ingrese un Video:</label>
        <input type="file" name="video" accept=".mp4">
                                     <br>
                    <button type="submit">Guardar</button>
                  </form>
            </div>  