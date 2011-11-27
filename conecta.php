<?php
     class BancoConector
	 {
	   public $banco;
	   public $usuario;
	   public $senha;
	   public $url;
	   public $id_con;
	   
	    public function __construct ($b, $u, $s, $url){
     
           $this->banco = $b;
           $this->usuario = $u;
           $this->senha = $s;
           $this->url = $url;
        }
		
		public function conecta(){
            $this->id_con=mysql_connect($this->url,$this->usuario,$this->senha);		
	        $cn=mysql_select_db($this->banco, $this->id_con);
		}

		public function executaSql($sql){
		   return @mysql_query($sql,$this->id);
		}
		

	}
		$cn= new BancoConector("posto_seu_jao","root","","localhost");
	    $cn->conecta();

?>