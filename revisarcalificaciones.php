<html>
<head>
	<title>Procesando Datos con HTML y PHP</title>
</head>
<body>
	<h1><center>Captura y Validaci&oacute;n de Datos</center></h1>
	<?php
		//1. Valido si existen tres NP o SD
		if ($_POST['p1'] == "NP" and $_POST['p2'] == "NP" and $_POST['p3'] == "NP") 
		{
			echo "Te fuiste a Ordi";
		}else
		{
			//2.Validando si existen menos de tres NP
			if ($_POST['p1'] == "NP" or $_POST['p2'] == "NP" or $_POST['p3'] == "NP") 
			{
				echo "Tienes ordinario, hechale mas ganas, asi como vas a trabajar con bill gates";
			}else
			{
				//3. Validando si la tercer parcial es reprobatoria
				if ($_POST['p3'] < 6) 
				{
					echo "Tienes Ordi por reprobar tercer parcial, nimodo";
				}else
				{
					//4.Calcula la suma de parciales
					$suma=$_POST['p1']+$_POST['p2']+$_POST['p3'];
					//5.Validando si la suma es mayor a 24
					if ($suma>=24 and $suma<=30) 
					{
						echo "FELICIDADES pasate la materia c:";
					}else
						{
							echo "A hechale mas galleta pal ordi mi chavo, no juntaste los puntos >:c";
						}
					}
				}
			}
		}
	?>
</body>
</html>