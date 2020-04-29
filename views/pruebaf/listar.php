<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cedula</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Edad</th>
      <th scope="col">Telefono</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $key => $value): ?>
    	<tr>
    		<td><?= $value->id ?></td>
    		<td><?= $value->nombre ?></td>
    		<td><?= $value->cedula ?></td>
        <td><?= $value->fecha ?></td>
        <td><?= $value->edad ?></td>
    		<td><?= $value->telefono ?></td>
    		<td><a class="btn btn-success" href="index.php?controller=adviser&action=update&id=<?= $value->id ?>">Actualizar</a>-
    		<a class="btn btn-danger" href="index.php?controller=adviser&action=delete&id=<?= $value->id ?>">Borrar</a></td>
    	</tr>
    <?php endforeach;?>
  </tbody>
</table>
<a class="btn btn-primary" href="index.php?controller=adviser&action=crear">crear</a>
