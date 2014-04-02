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
		
		
		//c) Um método que permita verificar se dois objetos representam o mesmo país (igualdade semântica). Dois países são iguais se tiverem o mesmo código ISO;
		public function comparaPais($p1, $p2){
			if($p1->codIso == $p2->codIso){
				return true;
			}else{
				return false;
			}
		}
		
		//d) Um método que informe se outro país é limite do pais que recebeu por parametro;
		public function paisLimite($p1){
			foreach($this->fronteira as $v){
				if($v == $p1){
					return true;
				}
			}
			return false;
		}
		
		//e) Um método que retorne a densidade populacional do país;
		public function densidadePop($p1){
			return ($p1->populacao / $p1->dimensao);
		}
