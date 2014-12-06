<?php

	/*
		Las variables en PHP se inician con el simbolo de dolar ($) 
		seguido del nombre de la variable que se desee, las variables
		son Case Sensitive, en todo caso hay que tener en cuenta que 
		se distingen tanto de mayusculas y minusculas.

		Una variable nunca deve de inicializarse con un numero ya que 
		no sera valido o el script fallara.

		Existen variables reservadas por el sistema de las cuales no se 
		pueden utilizar porque ya estan reservadas. Ejemplos $this, $_POST ...

	*/

	$variable = null; // Este es el ejemplo de una variable comun

	$camelCase = null; // Este es un ejemplo estilo Camel Case

	$_underscore = null; // Este es un ejemplo con guion bajo

	$variable_compuesta = null; // Una variable solo puede componerse con guion bajo

	// Se pueden distingir de mayusculas y minusculas, 
	// las siguentes variables no son las mismas y se pueden usar separado
	$numero = 3;
	$Numero = 5;

	echo $numero." / ".$Numero;

	

?>