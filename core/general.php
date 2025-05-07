<?php

require_once("conectDB.php");

// #-----> Consulta Especifica

function consultaRegistro($sql)
{

	$link = mysqli_connect(dbHstePagos, dbUsrePagos, dbPwdePagos, dbNamePagos);
	mysqli_set_charset($link, "utf8mb4");
	//--- comprueba la conexión 
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	#echo '==========>'. $sql;
	if ($resultado = mysqli_query($link, $sql)) {
		$registro = mysqli_fetch_row($resultado);
		//-- liberar el conjunto de resultados 
		mysqli_free_result($resultado);
		unset($sql);
	} else {
		$registro = null;
	}
	mysqli_close($link);
	return ($registro);
}

// #-----> Consulta Varios registros

function consultarRegistros($sql)

{

	$link = mysqli_connect(dbHstePagos, dbUsrePagos, dbPwdePagos, dbNamePagos);

	mysqli_set_charset($link, "utf8mb4");

	// comprueba la conexión 

	if (mysqli_connect_errno()) {

		printf("Connect failed: %s\n", mysqli_connect_error());

		exit();
	}



	#echo $sql;

	$resultadosql = mysqli_query($link, $sql);
	if (!$resultadosql) {
		echo 'No se pudo ejecutar la consulta: ' . mysqli_error($link);
		exit;
	}
	#

	#            $resultadosql= mysql_query($sql); 

	$indice = 0;

	$valores = NULL;

	$registro = NULL;

	$limite = mysqli_num_fields($resultadosql);



	while ($valores = mysqli_fetch_row($resultadosql)) {

		for ($columna = 0; $columna < $limite; $columna++) {

			$registro[$indice][$columna] = $valores[$columna];
		}

		$indice++;
	}



	mysqli_free_result($resultadosql);

	#mysql_close ($$dbc); //eloriginal donde se especifica el nombre de la conexion

	mysqli_close($link);



	return ($registro);
}


// #----> ejecutar SQL

function ejecutar($sql)

{

	$link = mysqli_connect(dbHstePagos, dbUsrePagos, dbPwdePagos, dbNamePagos);

	mysqli_set_charset($link, "utf8mb4");

	// comprueba la conexión 

	if (mysqli_connect_errno()) {

		printf("Connect failed: %s\n", mysqli_connect_error());

		exit();
	}



	#global $$dbc; // Need the connection.

	$centinela = false;

	$resultado = mysqli_query($link, $sql);



	if ($resultado) {

		$centinela = true;
	}

	mysqli_close($link);



	return ($centinela);
}

