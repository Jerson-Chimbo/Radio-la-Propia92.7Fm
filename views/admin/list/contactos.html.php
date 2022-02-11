<div class="list-noticias block">
    <h2>Las siguientes personas desean comunicarse con tigo</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Interesad(o/a)</th>
            </tr>
        </thead>
        <tbody>

        
    <?php foreach($contactos as $contacto): ?>
        <tr>
            <td> <?= $contacto->nombre ?? ''  ?> </td>
            <td> <?= $contacto->apellido ?? ''  ?> </td>
            <td> <?= $contacto->telefono ?? ''  ?> </td>
            <td> <?= $contacto->direccion ?? ''  ?> </td>
            <td> <?= $contacto->email ?? ''  ?> </td>
            <td>  <?= $contacto->descripcion ?? ''  ?> </td>            
        </tr>
         <?php endforeach; ?>
    </tbody>
    </table>
</div>