<div class="list-noticias block">
    <h2>Las siguientes personas desean comunicarse con tigo</h2>
    <?php foreach($contactos as $contacto): ?>
        <blockquote>
            <p>Nombre: <?= $contacto->nombre  ?> </p>
            <p>Apellido: <?= $contacto->apellido  ?> </p>
            <p>Telefono: <?= $contacto->telefono  ?> </p>
            <p>Dirección: <?= $contacto->direccion  ?> </p>
            <p>Email: <?= $contacto->email  ?> </p>
            <p>Interad(o/a) en: <?= $contacto->Descripción  ?> </p>            
        </blockquote>
    <?php endforeach; ?>
</div>