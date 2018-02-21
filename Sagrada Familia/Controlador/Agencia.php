<?php

	require_once "Visitante.php";

	class Agencia extends Visitante{

		private $nombreAgencia, $guia;

		function Libre($nom="", $apellidos="", $edad=0, $pais="", $audioguia="", $parado="", $nombreAgencia="", $guia=false){
			parent::Visitante($nom, $apellidos, $edad, $pais, $audioguia, $parado);
			$this->nombreAgencia=$nombreAgencia;
			$this->guia=$guia;
		}

		public function getNombreAgencia(){
			return $this->nombreAgencia;
		}

		public function getGuia(){
			return $this->guia;
		}

		function precioEntrada(){
			$precio = 0;
			return  $precio;
		}
		function imprimirEntrada(){
            echo "Nombre:    ".$this->getNombre()."<br/>";
            echo "Apellidos: ".$this->getApellidos(). "<br/>";
            echo "Edad:      ".$this->getEdad(). "<br/>";
            echo "Audioguia: ".$this->getAudioguia()."<br/>";

            echo "Precio:    ".$this->precioEntrada(). "<br/>";		}

	}

?>