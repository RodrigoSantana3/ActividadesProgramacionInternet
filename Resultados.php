<html>
<head>
	<title>Actividad 7: Condiciones y Ciclos</title>
</head>
<body>
	<center><h1>Resultados</h1></center>
	<center>
		<?php
			echo "Primera Edad: <b>".$_POST['edad1']."</b> &nbsp; 
			&nbsp; Segunda Edad: <b>".$_POST['edad2']."</b><br><br><br><br>";
		?>

		<?php
			$edadmayor0=0;
			$edadmenor0=0;

			//Definir mayores y menores
			if ($_POST['edad1'] > $_POST['edad2']) 
			{
				echo "<b>".$_POST['edad1']."</b> Es la edad mayor <br>";
				echo "<b>".$_POST['edad2']."</b> Es la edad menor <br><br>";
				$edadmayor0=$_POST['edad1'];
				$edadmenor0=$_POST['edad2'];
			}else
			{
				if ($_POST['edad1'] < $_POST['edad2']) 
				{
					echo "<b>".$_POST['edad2']."</b> Es la edad mayor <br>";
					echo "<b>".$_POST['edad1']."</b> Es la edad menor <br><br>";
					$edadmayor0=$_POST['edad2'];
					$edadmenor0=$_POST['edad1'];
				}else
				{
					echo "Ambas edades son iguales <br><br>";
				}
			}

			$suma = 0;

			echo "La suma de las edades pares es: <br>";
			
			for ($i=$edadmenor0; $i<=$edadmayor0; $i++)
			{
				if ($i%2 == 0)
				{
					echo $i.",";
					$suma = $i + $suma;
				}
			}
			echo "= <br><b>".$suma."</b>";
		?>
	</center>
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 