<?php

include "classeTime.php";
include "classeJogador.php";

	class Jogo{
		private $time1;
		private $time2;
		private $placar;
		private $local;
		private $dia;
		private $horario;
		
		public function __construct(Times $t1, Times $t2, $p, $l, $d, $h){
			$this->time1 = $t1;
			$this->time2 = $t2;
			$this->placar = $p;
			$this->local = $l;
			$this->dia = $d;
			$this->horario = $h;
		}
		
		public function exibe_jogo(){
			echo "Jogo: .";
			$this->exibe_times().;
			$this->exibe_times().;
			echo "$this->placar.
			$this->local.
			$this->dia.
			$this->horario";
			
		}
		
	}
		
?>
