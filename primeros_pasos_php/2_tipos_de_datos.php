<?php

	/* 

		PHP soporta 8 tipos de datos 
		primitivos los cuales son:

		ESCALARES

		- boolean
		- integer
		- float/double
		- string and char

		COMPUESTOS

		- array
		- object

		ESPECIALES

		- resource
		- null

	*/

	/* ---------------------------------- */

	// BOOLEAN
	// Estan compuestos por verdadero y falso (TRUE, FALSE)

	$tipo_bool = true; // Variable verdadero
	$tipo_bool = false; // Variable falso

	// Sus converciones a BOOLEAN son:

	$tipo_bool = (bool) "";			// bool(false)
	$tipo_bool = (bool) 1;			// bool(true)
	$tipo_bool = (bool) -2;			// bool(true)
	$tipo_bool = (bool) "foo";		// bool(true)
	$tipo_bool = (bool) 2.3e5;		// bool(true)
	$tipo_bool = (bool) array(12);	// bool(true)
	$tipo_bool = (bool) array();	// bool(false)
	$tipo_bool = (bool) "false";	// bool(true)

	// INTEGER
	// Es un valor numero de tipo entero que esta en el set de ℤ = {..., -2, -1, 0, 1, 2, ...}.

	$tipo_int = 1234; // numero decimal
	$tipo_int = -123; // numero negativo
	$tipo_int = 0123; // numero octal (equivalente a 83 decimal)
	$tipo_int = 0x1A; // numero hexadecimal (equivalente a 26 decimal)

	// Sus converciones a INTEGER son:

	$tipo_int = (int) ( (0.1+0.7) * 10 ); // como resultado 7!

	// FLOAT o DOUBLE
	// Es un tipo de dato conocido como numeros reales, flotante o doble 
	// en el cual se usan decimales y cualquier set matematico.

	$tipo_float = -99.999999999;

	// Sus converciones a FLOAT o DOUBLE son:
	$tipo_float = (double) ( (0.1+0.7) * 10.9999 ); // como resultado 8.79992

	// STRING
	// Es una cadena de caracteres el cual puede ser representado 
	// como texto por comilla simple ('...') y doble comilla ("...")

	$tipo_string = "Este es un texto ejemplo";
	$tipo_string = 'Este es un string con simple comilla';

	// Los string tienen caracteres de escape que sirven para hacer enfacis en caracteres especiales.

	/*
		\n	linefeed (Salto de linea)
		\r	carriage return (Retorno de carro)
		\t	horizontal tab (Corrido de carro)
		\v	vertical tab (Corrido de carro vertical)
		\e	escape (Escape de comando)
		\f	form feed (Formato de formulario)
		\\	backslash (Contra-pleca)
		\$	dollar sign (Simbolo de dolar)
		\"	double-quote (Doble comilla)

	*/

	echo "<p> Este texto tiene salto de linea \n Ya esta es otra linea </p>";

	echo "<p> Este texto tiene \t corrido y puedo incluir doble-comilla \" sin interrumpir </p>";

	echo "<p> Tambien puedo imprimir la contra-pleca \\ dentro de un string </p>";

	echo "<p> Tambien se pueden imprimir variables en doble-comilla : $tipo_bool o  $tipo_int</p>";

	echo "<p> Puedo anidar textos con punto (.) Por ejemplo "."este texto fue anidado </p>";

	echo "<p> O separado para imprimir una variable ".$tipo_float." en medio de un string </p>";

	// ARRAY, OBJECT y RESOURCE seran explicados luego en otro capitulo.

	// NULL
	// Es el espacio en memoria vacio para remover el valor de una variable.

	$tipo_null = null;

?>