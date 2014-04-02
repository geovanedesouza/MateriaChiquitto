<?php 

  class Pais{
		private $codIso;
		private $nome;
		private $populacao;
		private $dimensao;
		private $fronteira = new Array();
		
		public function setFronteira(array $paises){
			foreach($paises as $v){
				$this->fronteira[] = $v;
			}
			//$this->fronteira = array_merge($this->fronteira,$paises);
		}
		
		public function setFronteira1($pais){
			$this->fronteira[] = $pais;
		}
