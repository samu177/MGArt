<?php
	
	class Front{
		public function __construct(){
		
		}

		public function ConectarBD(){

		    $mysqli = new mysqli("localhost", "root", "", "bd_mgart");
			
			if ($mysqli->connect_errno) {
				echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			return $mysqli;
		}

		public function getAll(){
			$mysqli=$this->ConectarBD();
		    $toret=array();

		    $sql = "SET NAMES 'utf8'";
		    $mysqli->query($sql);

		    $sql = "select valor from config where (clave = 'email_contacto')";
		    if (!($resultado = $mysqli->query($sql))){
			return 'ERR_CONS_BD';
			}
		    else{
				while($aux = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			    		array_push($toret, $aux['valor']);
			    	}
			}

			$sql = "select valor from config where (clave = 'cuenta_instagram')";
		    if (!($resultado = $mysqli->query($sql))){
			return 'ERR_CONS_BD';
			}
		    else{
				while($aux = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			    		array_push($toret, $aux['valor']);
			    	}
			}

			$sql = "select valor from config where (clave = 'numero_contacto')";
		    if (!($resultado = $mysqli->query($sql))){
			return 'ERR_CONS_BD';
			}
		    else{
				while($aux = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			    		array_push($toret, $aux['valor']);
			    	}
			}

			$sql = "select valor from config where (clave = 'texto_biografia')";
		    if (!($resultado = $mysqli->query($sql))){
			return 'ERR_CONS_BD';
			}
		    else{
				while($aux = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			    		array_push($toret, $aux['valor']);
			    	}
			}

			$sql = "select valor from config where (clave = 'foto_biografia')";
		    if (!($resultado = $mysqli->query($sql))){
			return 'ERR_CONS_BD';
			}
		    else{
				while($aux = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			    		array_push($toret, $aux['valor']);
			    	}
			}

			$sql = "select valor from config where (clave = 'foto_inicio')";
		    if (!($resultado = $mysqli->query($sql))){
			return 'ERR_CONS_BD';
			}
		    else{
				while($aux = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			    		array_push($toret, $aux['valor']);
			    	}
			}

			$sql = "select valor from config where (clave = 'titulo_pagina')";
		    if (!($resultado = $mysqli->query($sql))){
			return 'ERR_CONS_BD';
			}
		    else{
				while($aux = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			    		array_push($toret, $aux['valor']);
			    	}
			}

			$sql = "select valor from config where (clave = 'descrip_pagina')";
		    if (!($resultado = $mysqli->query($sql))){
			return 'ERR_CONS_BD';
			}
		    else{
				while($aux = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			    		array_push($toret, $aux['valor']);
			    	}
			}

			return $toret;
		}
	}

?>
