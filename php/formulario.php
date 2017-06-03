<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from person where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<div class="form_crud">

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <div class="label_form">Nombre</div>
    <input type="text" class="form-control" value="<?php echo $person->name; ?>" name="name" required>
  </div>
  <div class="form-group">
    <div class="label_form">Apellido</div>
    <input type="text" class="form-control" value="<?php echo $person->lastname; ?>" name="lastname" required>
  </div>
  <div class="form-group">
    <div class="label_form">Domicilio</div>
    <input type="text" class="form-control" value="<?php echo $person->address; ?>" name="address" required>
  </div>
  <div class="form-group">
    <div class="label_form">Email</div>
    <input type="email" class="form-control" value="<?php echo $person->email; ?>" name="email" >
  </div>
  <div class="form-group">
    <div class="label_form">Telefono</div>
    <input type="text" class="form-control" value="<?php echo $person->phone; ?>" name="phone" >
  </div>
  <div class="form-group_btn">
    <input type="hidden" name="id" value="<?php echo $person->id; ?>">
    <button type="submit" class="btn btn-default"><i class="fa fa-plus fa-2x"></i> Agregar</button>
  </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
</form>

</div>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>