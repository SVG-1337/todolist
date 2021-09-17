<!DOCTYPE html>
<html>

<head>
	<title>CRUD PHP</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="background"></div>

	<h1> 
	<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m143.194 218.977 46.751-56.244c2.648-3.186 2.212-7.914-.974-10.562-3.184-2.647-7.914-2.211-10.562.974l-40.074 48.211-8.759-14.228c-2.171-3.527-6.79-4.628-10.319-2.455-3.527 2.172-4.626 6.792-2.455 10.318l14.236 23.123c2.692 4.37 8.878 4.807 12.156.863z"/><path d="m116.804 293.991 14.236 23.123c2.69 4.37 8.876 4.807 12.154.862l46.751-56.244c2.648-3.186 2.212-7.914-.974-10.562-3.184-2.647-7.914-2.212-10.562.974l-40.074 48.211-8.759-14.228c-2.171-3.527-6.79-4.628-10.319-2.455-3.526 2.173-4.625 6.793-2.453 10.319z"/><path d="m116.804 393.658 14.236 23.123c2.69 4.37 8.876 4.807 12.154.862l46.751-56.244c2.648-3.186 2.212-7.914-.974-10.562-3.184-2.647-7.914-2.212-10.562.974l-40.074 48.211-8.759-14.228c-2.171-3.527-6.79-4.627-10.319-2.455-3.526 2.173-4.625 6.793-2.453 10.319z"/><path d="m448.5 423.405c-4.142 0-7.5 3.357-7.5 7.5v54.595c0 6.341-5.159 11.5-11.5 11.5h-347c-6.341 0-11.5-5.159-11.5-11.5v-328.691c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v328.691c0 14.612 11.888 26.5 26.5 26.5h347c14.612 0 26.5-11.888 26.5-26.5v-54.595c0-4.142-3.358-7.5-7.5-7.5z"/><path d="m429.5 57.791h-36.688v-30.991c0-14.777-12.022-26.8-26.8-26.8s-26.8 12.022-26.8 26.8v30.991h-56.412v-30.991c0-14.778-12.023-26.8-26.8-26.8s-26.8 12.022-26.8 26.8v30.991h-56.413v-30.991c0-14.777-12.022-26.8-26.8-26.8-14.777 0-26.8 12.022-26.8 26.8v30.991h-36.687c-14.612 0-26.5 11.888-26.5 26.5v37.518c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-37.518c0-6.341 5.159-11.5 11.5-11.5h36.687v11.909c0 14.777 12.022 26.8 26.8 26.8s26.8-12.022 26.8-26.8v-11.909h56.413v11.909c0 14.777 12.022 26.8 26.8 26.8s26.8-12.022 26.8-26.8v-11.909h56.413v11.909c0 14.777 12.022 26.8 26.8 26.8 14.777 0 26.8-12.022 26.8-26.8v-11.909h36.687c6.341 0 11.5 5.159 11.5 11.5v311.614c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-311.614c0-14.612-11.888-26.5-26.5-26.5zm-271.712 26.909c0 6.507-5.293 11.8-11.8 11.8-6.506 0-11.8-5.293-11.8-11.8 0-15.987 0-52.896 0-57.9 0-6.507 5.293-11.8 11.8-11.8s11.8 5.293 11.8 11.8zm110.012 0c0 6.507-5.293 11.8-11.8 11.8s-11.8-5.293-11.8-11.8c0-15.987 0-52.896 0-57.9 0-6.507 5.293-11.8 11.8-11.8s11.8 5.293 11.8 11.8zm110.013 0c0 6.507-5.293 11.8-11.8 11.8s-11.8-5.293-11.8-11.8c0-15.987 0-52.896 0-57.9 0-6.507 5.293-11.8 11.8-11.8 6.506 0 11.8 5.293 11.8 11.8z"/><path d="m221.739 225.183h158c12.958 0 23.5-10.542 23.5-23.5s-10.542-23.5-23.5-23.5h-158c-12.958 0-23.5 10.542-23.5 23.5s10.542 23.5 23.5 23.5zm0-32h158c4.687 0 8.5 3.813 8.5 8.5s-3.813 8.5-8.5 8.5h-158c-4.687 0-8.5-3.813-8.5-8.5s3.813-8.5 8.5-8.5z"/><path d="m221.739 324.396h158c12.958 0 23.5-10.542 23.5-23.5s-10.542-23.5-23.5-23.5h-158c-12.958 0-23.5 10.542-23.5 23.5s10.542 23.5 23.5 23.5zm0-32h158c4.687 0 8.5 3.813 8.5 8.5s-3.813 8.5-8.5 8.5h-158c-4.687 0-8.5-3.813-8.5-8.5s3.813-8.5 8.5-8.5z"/><path d="m221.739 423.608h158c12.958 0 23.5-10.542 23.5-23.5s-10.542-23.5-23.5-23.5h-158c-12.958 0-23.5 10.542-23.5 23.5s10.542 23.5 23.5 23.5zm0-32h158c4.687 0 8.5 3.813 8.5 8.5s-3.813 8.5-8.5 8.5h-158c-4.687 0-8.5-3.813-8.5-8.5s3.813-8.5 8.5-8.5z"/></g></svg>	
	TO DO LIST</h1>

	

	<?php
	include 'sqlFunctions.php';
	include 'listeFunctions.php';
?>
<div class="scrollable-container">
<div class="container-lists">
		<?php
	$tasks = getTasks();
	afficherListeAFaire($tasks);
	$tasks = getTasks();
	afficherListeEnCours($tasks);
	$tasks = getTasks();
	afficherListeTerminée($tasks);
	
	?>

	</div>
</div>
	


	

	<div class="create-task-home">
		<button class="create">
			<a href=formulaireTask.php?id=0>Créer une tâche</a>
		</button>
	</div>

	
</body>

</html>