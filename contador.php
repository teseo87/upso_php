<?
session_register('contador');
?>
<HTML>
<HEAD>
<TITLE>contador.php</TITLE>
</HEAD>
<BODY>
<?
If (isset($contador)==0)
{$contador=0;}
++$contador;
echo "<a href="contador.php">Has recargado esta página $contador veces</a>";
?>
</BODY>
</HTML>
