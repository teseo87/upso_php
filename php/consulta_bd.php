<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from person";
$query = $con->query($sql1);

?>

<?php if($query->num_rows>0):?>

<?php while ($r=$query->fetch_array()):?>
<p><?php echo $r["name"]; ?></p></br>
<p><?php echo $r["lastname"]; ?></td>
<p><?php echo $r["email"]; ?></td>
<p><?php echo $r["address"]; ?></td>
<p><?php echo $r["phone"]; ?></td>
<?php endwhile;?>

<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
