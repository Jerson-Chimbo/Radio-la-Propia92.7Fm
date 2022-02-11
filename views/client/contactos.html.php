<?php

?>

    <section id="main">
        <div class="contenedor"> 
            <article id="main-principal">
            <h1>Contactanos</h1>
            <p>Puedes ponerte en contacto con nosotros a travez de este formulario. Pronto un asesor de Radio la Propia 92.7FM se contactara contigo para brindarte una mejor atencion.</p>

       <div class="formularioc">
           <?php
             if(isset($correcto)): 
             
             ?>
            <div class="correcto">
                <?= $correcto; ?>
            </div>
            <?php endif;?>
            <form action="" method="post">
                  <label>Nombre:</label>
                  <input type="text" name="nombre" placeholder="Ingresa tu nombre"required> 
                    <label>Apellido:</label>
                    <input type="text" name="apellido" placeholder="Ingresa tu apellido"required>  <br>
                  
                    <label>E-mail:</label>
                    <input type="text" name="email" placeholder="Ingresa tu correo"required> <br>  
                  
                    <label>Telefono-Celular:</label>
                    <input type="tel" name="telefono" placeholder="Ingresa tu numero celular"required>  <br> 

                    <label>Direccion:</label>
                    <input type="text" name="direccion" placeholder="Ingresa tu direccion"required> <br>

                    <label>Descripcion:</label>
                    <textarea name="descripcion"></textarea> <br>
                    <button type="submit">Enviar</button>
                  </form>
            </div>  

        </article>
        <aside id="lateral">
            <div class="secundario">
                <h3>Encuentranos en Guaranda:</h3>
                <div class="redes1">
                    <li><a href="https://goo.gl/maps/VSpHem8jBjU71aHh6" target="_blank"><img src="/public/asset/img/ubicacion.png" alt=""></a><span>Av. Monseñor Candido Rada y 23 de Abril (Junto a las Canchas del Barrio Bellavista</span></li>

                    <li><a href="tel:(03) 298-4126" target="_blank"><img src="/public/asset/img/telefono.png" alt="telefono"></a><span>(03) 298-4126 </span></li>

                    <li><a href="https://wa.link/9b616r" target="_blank"><img src="/public/asset/img/what.jfif" alt="WhatSapp"></a><span>0997810792</span></li>

                    <li><a href="mailto:lapropia927@gmail.com"><img src="/public/asset/img/gmail.png" alt="gmail"></a><span>lapropia927@gmail.com</span></li>
                </div>
            </div>

        </aside>
        
         
        <section class="conten-map">
        <section class="contenedor1">
        <h3>Ubicanos</h3>
        </section>
        <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2841218587355!2d-78.99807528595548!3d-1.5889702364776752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d31640122714a3%3A0x2049d7ad79a5fa5f!2s23%20de%20Abril%20%26%20Avenida%20Monse%C3%B1or%20Candido%20Rada%2C%20Guaranda!5e0!3m2!1ses!2sec!4v1644551042587!5m2!1ses!2sec"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
    </section>
    </div>
        </section>
    
        

    