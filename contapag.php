<?
error_reporting(E_ALL);
session_start();
if (!isset($_SESSION["cuenta_paginas"])){
    $_SESSION["cuenta_paginas"] = 1;
}else{
    $_SESSION["cuenta_paginas"]++;
}
?>
<html>
<head>
<title>Contar páginas vistas por un usuario en toda su sesión</title>
</head>

<body>
<?
echo "Desde que entraste has visto " . $_SESSION["cuenta_paginas"] . " páginas";
?>
<br>
<br>
<a href="contapag.php">Ver otra página</a>
</body>
</html>
