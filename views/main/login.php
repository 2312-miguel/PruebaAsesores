<aside class="col-sm-4 justify-content-center">
	<div class="card">
	<article class="card-body">
		<h4 class="card-title text-center mb-4 mt-1">Inicio</h4>
		<hr>
		<?php if (isset($error)): ?> 
			<p class="text-danger text-center"><?= $error ?> </p>
		<?php endif; ?>
		<form action="" method="post">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
					 </div>
					<input name="usuario" class="form-control" required="required" placeholder="Usuario" type="text">
				</div> <!-- input-group.// -->
			</div> <!-- form-group// -->
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					 </div>
				    <input name="clave" class="form-control" required="required" placeholder="******" type="password">
				</div> <!-- input-group.// -->
			</div> <!-- form-group// -->
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block"> Login  </button>
			</div> <!-- form-group// -->
		</form>
	</article>
	</div> <!-- card.// -->

</aside>