<div class="list-noticias block servicos">
    <h2>Las siguientes personas desean comunicarse contigo</h2>
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
            <td> <?= $contacto->nombre ?? 'no ha registrado este dato'  ?> </td>
            <td> <?= $contacto->apellido ?? 'no ha registrado este dato'  ?> </td>
            <td> <?= $contacto->telefono ?? 'no ha registrado este dato'  ?> </td>
            <td> <?= $contacto->direccion ?? 'no ha registrado este dato'  ?> </td>
            <td> <?= $contacto->email ?? ''  ?> </td>
            <td>  <?= $contacto->descripcion ?? 'no ha registrado este dato'  ?> </td>            
        </tr>
         <?php endforeach; ?>
    </tbody>
    </table>
</div>