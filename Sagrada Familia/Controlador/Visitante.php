<?php 
	class Visitante {
		private $nombre, $apellidos, $edad, $pais, $audioguia, $parado;

		function Visitante ($nombre="", $apellidos="", $edad=0, $pais="", $audioguia="", $parado=""){
	        $this->nombre=$nombre;
	        $this->apellidos=$apellidos;
	        $this->edad=$edad;
	        $this->pais=$pais;
	        $this->audioguia=$audioguia;
	        $this->parado=$parado;
  		}

  		public function getNombre(){
        	return $this->nombre;
  		}

  		public function getApellidos(){
  			return $this->apellidos;
  		}

  		public function getEdad(){
  			return $this->edad;
  		}

  		public function getPais(){
  			return $this->pais;
  		}

  		public function getAudioguia(){
  			return $this->audioguia;
  		}

  		public function getParado(){
  			return $this->parado;
  		}

		function precioEntrada(){
			$precio=0;
			if ($this->edad>=11 && $this->edad<=25){
				$precio = 3;
			}
			else if ($this->edad>=26 && $this->edad<=65){
				$precio = 8;
			}
			else if ($this->edad>=65){
				$precio = 1.5;
			}

			if ($this->audioguia=="Si"){
				$precio+=2;
			}
			if ($this->parado=="No"){
				$precio/2;
			}
			return $precio;
	}
		function imprimirEntrada(){
			echo $this->nomnre;
			echo $this->apellidos;
			echo $this->edad;
			echo $this->audioguia;
		}
	}
?>