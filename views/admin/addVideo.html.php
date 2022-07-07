<div class="formularioc ancho">
<?php if(isset($correcto)): ?>
    <div class="correcto">
       
        <?= $correcto; ?>
      
    </div>
    <?php endif;?>
            <form action="" method="post" enctype="multipart/form-data">
            <label for="">Ingrese un título del video</label>
            <input type="text" name="title" required>
            <label for="descripcion">Ingrese la Descripcion del video</label>
            <textarea name="descripcion" required></textarea>
            <label for="">Ingrese un Video:</label>
           <input type="file" name="video" accept=".mp4" required>
                                     <br>
                    <button type="submit">Guardar</button>
                  </form>
            </div>  