<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from person";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table_res">
<thead>
	<th class="table_res_item_th">Nombre</th>
	<th class="table_res_item_th">Apellido</th>
	<th class="table_res_item_th">Email</th>
	<th class="table_res_item_th">Direccion</th>
	<th class="table_res_item_th">Telefono</th>
	<th class="table_res_item_th"></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td class="table_res_item"><?php echo $r["name"]; ?></td>
	<td class="table_res_item"><?php echo $r["lastname"]; ?></td>
	<td class="table_res_item"><?php echo $r["email"]; ?></td>
	<td class="table_res_item"><?php echo $r["address"]; ?></td>
	<td class="table_res_item"><?php echo $r["phone"]; ?></td>
	<td class="table_res_item_actions">
		<a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
