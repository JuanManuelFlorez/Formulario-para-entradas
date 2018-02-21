<?php
	class LugarVisita{

		private $nombre, $dire, $fecha, $valoracion;

		function LugarVisita($nombre="", $dire="", $fecha="", $valoracion=0){
			$this->nombre=$nombre;
			$this->dire=$dire;
			$this->fecha=$fecha;
			$this->valoracion=$valoracion;

		}

		public function getNombre(){
        	return $this->nombre;
  		}

  		public function getDire(){
  			return $this->dire;
  		}

  		public function getFecha(){
  			return $this->fecha;
  		}

  		public function getValoracion(){
  			return $this->valoracion;
  		}
	}


?>