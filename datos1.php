<?php 
	
$usuario = $_POST['Usuario'];
$bd = $_POST['db'];
$pass = $_POST['Password'];

$conexion=mysqli_connect ('192.168.1.24',"{$usuario}","{$pass}","{$bd}");

 ?>
<!DOCTYPE html>
<html>
	<H1 align="center"> TABLAS AUDITORIO </H1>
<head>
	<title>mostrar tabla</title>
</head>
<body>
<br>
	<table border="1" >
		<tr>
	           <td>IDinterprete</td>
                   <td>nombre_artistico</td>
                   <td>instrumento</td>

		
		</tr>
		<?php 
		$sql="SELECT * from solistas";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr>
			<td><?php echo $mostrar['IDinterprete'] ?></td>
			<td><?php echo $mostrar['nombre_artistico'] ?></t>
                        <td><?php echo $mostrar['instrumento'] ?></t>

		<?php
		}
		?>
		</tr>
		</table>
</br>
</body>
<body>
<br>
		<table border="1" >
		<tr>
		<td>IDinterprete_orquesta</td>
                   <td>num_musicos</td>
                   <td>director</td>


                </tr>
                <?php 
                $sql="SELECT * from orquestas";
                $result=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($result)){
                 ?>
                <tr>
                        <td><?php echo $mostrar['IDinterprete_orquesta'] ?></td>
                        <td><?php echo $mostrar['num_musicos'] ?></t>
                        <td><?php echo $mostrar['director'] ?></t>
		<?php
		}
		?>
                </tr>
		</table>
		
		
</br>		
</body>
<body>
<br>
		<table border="1" >
		<tr>
		<td>id_interprete</td>
                   <td>nombre_interprete</td>

                </tr>
                <?php 
                $sql="SELECT * from interpretes";
                $result=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($result)){
                 ?>
                <tr>
                        <td><?php echo $mostrar['id_interprete'] ?></td>
                        <td><?php echo $mostrar['nombre_interprete'] ?></t>
                <?php
		}
		?>
		</tr>

	
	</table>
</body>
</html>

