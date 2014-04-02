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
		
		//f) Um método que receba um país como parâmetro e retorne a lista de vizinhos comuns aos dois países.*/
		public function vizinhos($p1){
			$retorno = Array();
			foreach ($p1->fronteira as $v1){
				foreach ($this->fronteira as $v2){
					if($v1 == $v2){
						$retorno[] = $v2;
					}
				}
			}
			return $retorno;
		}
		
		//a) Construtor que inicialize o código ISO, o nome e a dimensão do país;
		public function __construct($codIso, $nome, $dimensao){
			$this->codIso = $codIso;
			$this->nome = $nome;
			$this->dimensao = $dimensao;
		}
		
		
		//b) Métodos de acesso (getter/setter) para as propriedades código ISO, nome, população e dimensão do país;
		public function getCodIso(){
			return $this->codIso;
		}

		public function setCodIso($codIso){
			$this->codIso = $codIso;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getPopulacao(){
			return $this->populacao;
		}

		public function setPopulacao($populacao){
			$this->populacao = $populacao;
		}

		public function getDimensao(){
			return $this->dimensao;
		}

		public function setDimensao($dimensao){
			$this->dimensao = $dimensao;
		}
	
	}

?>
