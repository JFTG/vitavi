<?php
		include '../Controller/validar.inicio.class.php';
		inicio::session();
?>
<!DOCTYPE html>
 <html>
	 <head>
		 <title>Page Title</title>
		 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
		 <link rel="stylesheet" type="text/css" href="styles/estilos.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		 <meta name="author" content="@andrea, @jhon, @jeison">
	 </head>

		<?php
			include 'nav.inicio.php';
			inicio::pagina();
			include 'section.inicio.php';
		 ?>

		 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	 </body>
 </html>
