
<html>
</html>
<head>
<title>
	Lista de apoderados
</title>
</head>
<body>
	<center><h1>Lista de apoderados</h1></center>
	<table>
		<tr>
			<td>Rut</td>
			<td>Nombre</td>
			<td>RBD Escuela</td>
			<td>Tipo de persona</td>

			<center>
            <fieldset style='width:900px; border:6px groove #E2F1F2; background:whitesmoke; 
		          box-shadow: 8px 8px 6px #808080; border-radius: 10px;'>
            <h2>Listar apoderados</h2>
			<table  border='1' align='center'>
			<th width='200px'>Nombres</th>
		        <th width='200px'>Apellido Paterno</th>
			<th width='200px'>Apellido Materno</th>
			<th width='200px'>Apodo</th>";
		</tr>
	<?php
		$sqlsel="select * from persona, tipo_usu_sys where persona.id_tipo_usu=tipo_usu_sys.id and tipo_usu_sys.id='2'";
		$res=mysql_query($sqlsel,$enlace);
		while ($dato = mysql_fetch_array($res))
		{

		}
	?>	
	</table>
</body>

