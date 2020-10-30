<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 2 de Eliseo Nava</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/codigoifelse.png" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "p5_nava_10_php/ifelse.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
						Es una estructura de selecion doble if else, 
						se declaran 2 variables $a y $b, como el valor de a no es menor que b,  entonces el resultado es falso, en caso contrario el valor de a sera menor.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>