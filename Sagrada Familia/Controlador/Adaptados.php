<?php

	require_once "Visitante.php";

	
	class Adaptados extends Visitante{

		private $hotel, $visual, $motriz , $ascensor, $LugarVisita = array ("", "", "", "");

		function Adaptados($nom="", $apellidos="", $edad=0, $pais="", $audioguia="", $parado="", $hotel="", $visual, $motriz, $ascensor=false, $LugarVisita){
			parent::Visitante($nom, $apellidos, $edad, $pais, $audioguia, $parado);
			$this->hotel=$hotel;
			$this->visual=$visual;
			$this->motriz=$motriz;
			$this->ascensor=$ascensor;
			$this->LugarVisita=$LugarVisita;
		}

		public function getHotel(){
			return $this->hotel;
		}
		public function getAdaptacion(){
			return $this->adaptacion;
		}
		public function getAscensor(){
			return $this->ascensor;
		}
		public function getLugarVisita(){
			return $this->LugarVisita;
		}

		function precioEntrada(){
			$precio=0;
			if ($this->getEdad()>=11 && $this->getEdad()<=25){
				$precio = 3;
			}
			else if ($this->getEdad()>=26 && $this->getEdad()<=65){
				$precio = 8;
			}
			else if ($this->getEdad()>=65){
				$precio = 1.5;
			}

			$desc = $precio *0.75;
			$precio -= $desc;

			return $precio;
		}
		function imprimirEntrada(){
            echo "Nombre:    ".$this->getNombre()."<br/>";
            echo "Apellidos: ".$this->getApellidos(). "<br/>";
            echo "Edad:      ".$this->getEdad(). "<br/>";
            echo "Audioguia: ".$this->getAudioguia()."<br/>";
            echo "Precio:    ".$this->precioEntrada(). "<br/>";
			if ($this->visual == 'on'){
				echo "visual <br/>"  ;
			}
			if ($this->motriz == 'on'){
				echo "motriz <br/>";
			}
			if ($this->ascensor == 'on'){
				echo "ascensor <br/>";
			}
		}
	}
?>