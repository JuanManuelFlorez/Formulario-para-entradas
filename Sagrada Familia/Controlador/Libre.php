<?php
	require_once "Visitante.php";
	
	class Libre extends Visitante{

		private $hotel, $LugarVisita = array ("", "", "", "");

		function Libre($nom="", $apellidos="", $edad=0, $pais="", $audioguia, $parado, $hotel="", $LugarVisita){
			parent::Visitante($nom, $apellidos, $edad, $pais, $audioguia, $parado);
			$this->hotel=$hotel;
			$this->LugarVisita=$LugarVisita;
		}

		public function getHotel(){
			return $this->hotel;
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

			if ($this->getAudioguia()==true){
				$precio+=2;
			}
			if ($this->getParado()==true){
				$precio/2;
			}
			return $precio;
		}
		function imprimirEntrada(){
			echo "Nombre:    ".$this->getNombre()."<br/>";
			echo "Apellidos: ".$this->getApellidos(). "<br/>";
			echo "Edad:      ".$this->getEdad(). "<br/>";
            echo "Audioguia: ".$this->getAudioguia()."<br/>";

			echo "Precio:    ".$this->precioEntrada(). "<br/>";
		}
	}
	