<div class="servicos">
<h2>Servicios que oferta la Radio la Propia 92.7FM</h2>

<div class="servicios-items">
    <?php foreach($servicios as $servicio): ?>
    <section>
    <div class="servicios-descr">
        <div>
            <h3><?=$servicio['nombre'] ?></h3>

            <p><b>Descripcion: </b> <?=$servicio['descripcion'] ?></p>
            <div><span><b> Requisitos: </b> <?= $servicio['requisitos'] ?></span></div>
        </div>
        <div class="item-servicios">
            <span><b>Horas:  </b> <?=$servicio['horas'] ?></span>
            <span><b>Precio: </b>$<?=$servicio['precio'] ?></span>
        </div>
    </div>
    <div class="imagenes-servicios">
        <img src="/<?= $servicio['imagen1'] ?>" alt="">
        <img src="/<?= $servicio['imagen2'] ?>" alt="">
    </div>
    </section>
    <?php endforeach; ?>
</div>

</div>

