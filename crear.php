
<html>
	<head>
		<title>.: CRUD :.</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
  
  <div>
  <div class="bloque_title">
		<h2>Gestionar Entradas</h2>
  </div>
  </div>

  <div class="bloque_cont">
    <div class="form_title">
      <h2>Agregar</h4>
    </div>
    <div class="form_crud">
    <form role="form" method="post" action="php/agregar.php">
      <div class="form-group">
        <div class="label_form">Nombre</div>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="form-group">
        <div class="label_form">Apellido</div>
        <input type="text" class="form-control" name="lastname" required>
      </div>
      <div class="form-group">
        <div class="label_form">Domicilio</div>
        <input type="text" class="form-control" name="address" required>
      </div>
      <div class="form-group">
        <div class="label_form">Email</div>
        <input type="email" class="form-control" name="email" >
      </div>
      <div class="form-group">
        <div class="label_form">Telefono</div>
        <input type="text" class="form-control" name="phone" >
      </div>
      <div class="form-group_btn">
      <button type="submit" class="btn btn-default"><i class="fa fa-plus fa-2x"></i> Agregar</button>
      </div>
    </form>
    </div>

  </div><!-- /.modal-content -->


</div>
</div>
</div>


	</body>
</html>