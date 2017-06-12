<?php

session_start();

?>

<HTML>
<HEAD>
<TITLE>contador.php</TITLE>
</HEAD>
<BODY>

<?php



if(isset($_SESSION["contador"]) == 0) {
	$_SESSION["contador"] = 0;
}
	
$_SESSION["contador"] = $_SESSION["contador"]++;

	
	
echo "<a href='contador.php'>Has recargado esta página " . $contador . " veces</a>";

?>

</BODY>
</HTML>
