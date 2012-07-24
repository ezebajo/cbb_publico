<?php

/**
 * @author educacionit
 * @copyright 2011
 */

$link=mysql_connect("localhost","root","");
mysql_select_db("ajax_lunes",$link);

$sql="SELECT * FROM paises";
$res=mysql_query($sql);
?><html>
<head></head>
<body>
<script type="text/javascript" src="ajax.js" ></script>

Paises: <br />
<select id="pais" onchange="traerCombo();">
<option value="">Elija un pa&iacute;s</option>
<?

	while ($fila=mysql_fetch_assoc($res))
	{
		?>
		<option value="<?php echo $fila['cod_pais'];?>"><? echo $fila['nombre_pais'];?></option>
		<?
	}
?>
</select><br />
Provincia: <br>
<div id="respuesta">
<select id="provincia">
	<option value="">Elija una provincia</option>
</select>
</div>

</body>
</html>