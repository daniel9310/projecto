<?php 


class leyes
{
	
	function insertar_leyes($vidusr,$vnomley,$descley)
	{
		global $link;
		$sql = "CALL Ley_insertar('%1\$s','%2\$s','%3\$s')";
		$sql = sprintf($sql, $vidusr,$vnomley,$descley);
		$result = $link->query($sql);
		$resultado = array(); 
	}

	/*function modificar_leyes($vidLey, $vidusr, $vnomley, $vdescLey)
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}*/
}
/*
class articulos
{
	
	function __construct(argument)
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}
}

class fracciones
{
	
	function __construct(argument)
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}
}

class incisos
{
	
	function __construct(argument)
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}
}

class formatos
{
	
	function __construct(argument)
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}
}

class camposformatos
{
	
	function __construct(argument)
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}
}

class llenarformatos
{
	
	function __construct(argument)
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}

	function FunctionName($value='')
	{
		# code...
	}
}
*/
 ?>