<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>STUDI_CRUD</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="background"></div>


<?php
	include 'sqlFunctions.php';
	include 'listeFunctions.php';
	$action = $_GET["action"];


	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$name = $_GET["nom"];
		$status = $_GET["statusTask"];	
	}
	if ($action == "CREATE") {
		createTask($name, $status);

		echo "<p class='confirmation-message'> Tâche créée <svg version=\"1.1\" 
		viewBox=\"0 0 384.97 384.97\">		   <path d=\"M192.485,0C86.173,0,0,86.173,0,192.485S86.173,384.97,192.485,384.97c106.3,0,192.485-86.185,192.485-192.485
			   C384.97,86.173,298.785,0,192.485,0z M192.485,360.909c-93.018,0-168.424-75.406-168.424-168.424S99.467,24.061,192.485,24.061
			   s168.424,75.406,168.424,168.424S285.503,360.909,192.485,360.909z\"/>
		   <path d=\"M280.306,125.031L156.538,247.692l-51.502-50.479c-4.74-4.704-12.439-4.704-17.179,0c-4.752,4.704-4.752,12.319,0,17.011
			   l60.139,58.936c4.932,4.343,12.307,4.824,17.179,0l132.321-131.118c4.74-4.692,4.74-12.319,0-17.011
			   C292.745,120.339,285.058,120.339,280.306,125.031z\"/>
	   </p> <br>";
		echo "<a href='index.php' class='return'><svg class=\"return\" version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" 
		viewBox=\"0 0 447.243 447.243\" >
	   
		   <path d=\"M420.361,192.229c-1.83-0.297-3.682-0.434-5.535-0.41H99.305l6.88-3.2c6.725-3.183,12.843-7.515,18.08-12.8l88.48-88.48
			   c11.653-11.124,13.611-29.019,4.64-42.4c-10.441-14.259-30.464-17.355-44.724-6.914c-1.152,0.844-2.247,1.764-3.276,2.754
			   l-160,160C-3.119,213.269-3.13,233.53,9.36,246.034c0.008,0.008,0.017,0.017,0.025,0.025l160,160
			   c12.514,12.479,32.775,12.451,45.255-0.063c0.982-0.985,1.899-2.033,2.745-3.137c8.971-13.381,7.013-31.276-4.64-42.4
			   l-88.32-88.64c-4.695-4.7-10.093-8.641-16-11.68l-9.6-4.32h314.24c16.347,0.607,30.689-10.812,33.76-26.88
			   C449.654,211.494,437.806,195.059,420.361,192.229z\"/>
		   </svg>Retourner à la liste des taches</a>";
		
	}
	
	if ($action == "UPDATE") {
		updateTask($id, $name, $status);
		echo " <p class='confirmation-message'> Tache mise a jour <svg version=\"1.1\" 
		viewBox=\"0 0 384.97 384.97\">		   <path d=\"M192.485,0C86.173,0,0,86.173,0,192.485S86.173,384.97,192.485,384.97c106.3,0,192.485-86.185,192.485-192.485
			   C384.97,86.173,298.785,0,192.485,0z M192.485,360.909c-93.018,0-168.424-75.406-168.424-168.424S99.467,24.061,192.485,24.061
			   s168.424,75.406,168.424,168.424S285.503,360.909,192.485,360.909z\"/>
		   <path d=\"M280.306,125.031L156.538,247.692l-51.502-50.479c-4.74-4.704-12.439-4.704-17.179,0c-4.752,4.704-4.752,12.319,0,17.011
			   l60.139,58.936c4.932,4.343,12.307,4.824,17.179,0l132.321-131.118c4.74-4.692,4.74-12.319,0-17.011
			   C292.745,120.339,285.058,120.339,280.306,125.031z\"/> </p> <br>";
		echo "<a href='index.php' class='return'><svg class=\"return\" version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" 
		viewBox=\"0 0 447.243 447.243\" >
	   
		   <path d=\"M420.361,192.229c-1.83-0.297-3.682-0.434-5.535-0.41H99.305l6.88-3.2c6.725-3.183,12.843-7.515,18.08-12.8l88.48-88.48
			   c11.653-11.124,13.611-29.019,4.64-42.4c-10.441-14.259-30.464-17.355-44.724-6.914c-1.152,0.844-2.247,1.764-3.276,2.754
			   l-160,160C-3.119,213.269-3.13,233.53,9.36,246.034c0.008,0.008,0.017,0.017,0.025,0.025l160,160
			   c12.514,12.479,32.775,12.451,45.255-0.063c0.982-0.985,1.899-2.033,2.745-3.137c8.971-13.381,7.013-31.276-4.64-42.4
			   l-88.32-88.64c-4.695-4.7-10.093-8.641-16-11.68l-9.6-4.32h314.24c16.347,0.607,30.689-10.812,33.76-26.88
			   C449.654,211.494,437.806,195.059,420.361,192.229z\"/>
		   </svg>Retourner à la liste des taches</a>";

	}

	if ($action == "DELETE") {
		deleteTask($id);
		echo "<p class='confirmation-message'> Tâche supprimée <svg version=\"1.1\" 
		viewBox=\"0 0 384.97 384.97\">		   <path d=\"M192.485,0C86.173,0,0,86.173,0,192.485S86.173,384.97,192.485,384.97c106.3,0,192.485-86.185,192.485-192.485
			   C384.97,86.173,298.785,0,192.485,0z M192.485,360.909c-93.018,0-168.424-75.406-168.424-168.424S99.467,24.061,192.485,24.061
			   s168.424,75.406,168.424,168.424S285.503,360.909,192.485,360.909z\"/>
		   <path d=\"M280.306,125.031L156.538,247.692l-51.502-50.479c-4.74-4.704-12.439-4.704-17.179,0c-4.752,4.704-4.752,12.319,0,17.011
			   l60.139,58.936c4.932,4.343,12.307,4.824,17.179,0l132.321-131.118c4.74-4.692,4.74-12.319,0-17.011
			   C292.745,120.339,285.058,120.339,280.306,125.031z\"/>  </p> <br>";
		echo "<a href='index.php' class='return'><svg class=\"return\" version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" 
		viewBox=\"0 0 447.243 447.243\" >
	   
		   <path d=\"M420.361,192.229c-1.83-0.297-3.682-0.434-5.535-0.41H99.305l6.88-3.2c6.725-3.183,12.843-7.515,18.08-12.8l88.48-88.48
			   c11.653-11.124,13.611-29.019,4.64-42.4c-10.441-14.259-30.464-17.355-44.724-6.914c-1.152,0.844-2.247,1.764-3.276,2.754
			   l-160,160C-3.119,213.269-3.13,233.53,9.36,246.034c0.008,0.008,0.017,0.017,0.025,0.025l160,160
			   c12.514,12.479,32.775,12.451,45.255-0.063c0.982-0.985,1.899-2.033,2.745-3.137c8.971-13.381,7.013-31.276-4.64-42.4
			   l-88.32-88.64c-4.695-4.7-10.093-8.641-16-11.68l-9.6-4.32h314.24c16.347,0.607,30.689-10.812,33.76-26.88
			   C449.654,211.494,437.806,195.059,420.361,192.229z\"/>
		   </svg>Retourner à la liste des taches</a>";
	}
	

	
?>
</body>
</html>