<div class="container">
	
<form  id="formulario" method="post" action="" >
	  <div class="form-group">
		    <label for="nombre">Nombre</label>
		    <input type="text" class="form-control" name="nombre" value="<?= isset($row) ? $row->nombre : null ?>" id="nombre" placeholder="Ingrese nombre" >
	  		<span style="color: red" id="errorN"></span>

	  </div>
	  <div class="form-group">
		    <label for="cedula">Cedula</label>
		    <input type="number" class="form-control" name="cedula" value="<?= isset($row) ? $row->cedula : null ?>" id="cedula" placeholder="Ingrese cedula" >
		    <span style="color: red" id="errorCl"></span>
	  </div>
	  <div class="form-group">
		    <label for="fecha">Fecha nacimiento</label>
		    <input type="date" class="form-control" name="fecha" value="<?= isset($row) ? $row->fecha : null ?>" id="fecha" placeholder="Ingrese fecha" >
		    <span style="color: red" id="errorCl"></span>
	  </div>
	  <div class="form-group">
		    <label for="Telefono">Telefono</label>
		    <input type="number" class="form-control" name="telefono" value="<?= isset($row) ? $row->telefono : null ?>" id="numeroTelefono" placeholder="Ingrese telefono" >
		    <span style="color: red" id="errorTl"></span>
	  </div>
	  <div class="form-group">
		    <label for="cliente">Cliente para el que trabaja</label>
		    <input type="text" class="form-control" name="cliente" value="<?= isset($row) ? $row->cliente : null ?>" id="numeroTelefono" placeholder="Ingrese cliente" >
		    <span style="color: red" id=""></span>
	  </div>
	  <div>
		  <label for="sede">Sede donde trabaja</label>
		  <select class="form-control">
		  	  <option selected>Seleccione...</option>
			  <option name=sede value="ruta n" placeholder="ruta n">Ruta N</option>
			  <option name=sede value="buro" placeholder="buro">Buro</option>
			  <option name=sede value="puerto seco" placeholder="Puerto Seco">Puerto Seco</option>
		  </select>
	  </div>
	  <div class="form-group">
		    <label for="usuario_quien_registra">usuario que esta haciendo el registro</label>
		    <input type="text" class="form-control" name=usuario_quien_registra value="<?= isset($row) ? $row->usuario_quien_registra : null ?>" id="usuario_quien_registra" placeholder="usuario" >
		    <span style="color: red" id=""></span>
	  </div>
	  <label for="genero">genero</label>
	  <div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="genero" value="masculino">
		  <label class="form-check-label" for="masculino">Masculino</label>
	  </div>
	  <div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="genero"  value="femenino">
		  <label class="form-check-label" for="femenino">Femenino</label>
	  </div>
	  <div>
		  <button type="submit" class="btn btn-primary">Guardar</button>
	  </div>
</form>

</div>