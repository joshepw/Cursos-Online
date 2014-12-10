<!-- 

	1. INTRODUCCION AL PHP

	PHP (Acronimo Recursivo de PHP: Hypertext Preprocessor) es un
	lenguaje basado en script de uso general y codigo abierto orientado
	a desarrollo web y puede ser integrago con HTML. Este se compila del 
	lado del servidor, y su codigo no puede ser visto de lado del cliente.

	Los archivos basados en PHP usan la extension .php y .phtml en 
	algunos casos pero es una forma anticuada. Todo documeno se puede 
	inicializar con "<?php ?>", tambien se puede utilizar
	parcialmente abriendo y cerrando el script en cualquier parte del codigo,
	el codigo que esta por fuera de los tags de php, por defecto es HTML. 

-->

<?php

	// Los comentarios en PHP se manejan con doble-pleca (//) 
	// y deben de ser usado una vez por linea.

	/* 
		Tambien se pueden crear bloques de comentarios pero se abre con pleca+asterisco (/*)
		y se cierran con asterisco+pleca que es el viceversa. Dentro de ellos se pueden 
		usar las lineas de codigo que se desee, este bloque de texto es un ejemplo.

		Los comentarios se utilizar mucho para guiar al programador a explicar como 
		trabaja su codigo y tambien sirve para documentar las funciones del mismo.
	*/

	$ejemploDeVariable = false; # Pueden ser usados tambien al final de una instruccion con numeral (#).

	// El limitador en PHP es punto y coma (;) y es obligatorio al final de cada instruccion.

	// Los delimitadores de codigo y bloques de codigo son las llaves "{}"
	// Las expresiones e instrucciones pueden encerrarce por medio de parentesis "()"
	// El indice de los arreglos de variables se encierran entre Corchetes "[]"

?>

<!-- 
	Los metodos de Escape en PHP pueden ser en cualquier parte del 
	codigo HTML por medio de los tags <?php ?>.

	A continuacion dejamos un ejemplo 
-->

<p>Este texto es ignorado por PHP y se ve en el explorador directamente</p>
<p> <?php echo "Este texto es parseado atravez de PHP para ser mostrado en el explorador"; ?> </p>
<p>Este texto es ignorado por PHP y se ve en el explorador directamente</p>

<!-- Tambien hay metodos de escape por medio de condiciones, por ejemplo: -->

<?php if ($expression == true): ?>
	<p>Mostrara esto si la expresion es verdadera.</p>
<?php else: ?>
	<p>O mostrara esto si la expresion resulta falsa.</p>
<?php endif; ?>

<?php 
	/*
		Los metodos de salida en PHP son echo, print y printf.
	*/

	echo ("<p> Este es un ejemplo de salida </p>");

	print "<p> Este es un ejemplo de salida con print </p>";

	printf ("<p> Este es un ejemplo de salida con %s </p>","formato");
?>