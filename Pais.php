<?php 

  class Pais{
		private $codIso;
		private $nome;
		private $populacao;
		private $dimensao;
		private $fronteira = Array();
		
		public function setFronteira(array $paises){
			foreach($paises as $v){
				$this->fronteira[] = $v;
			}
		}
		
