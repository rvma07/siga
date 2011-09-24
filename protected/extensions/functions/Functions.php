<?php

class Functions{

	/**
	* Takes a string and shrinks it
	* @param string text to shrink
	* @param int size
	*/
	public static function retornaTextoMenor($texto,$size){

        $newstring = '';
        for($i=0;$i<strlen($texto);$i++){
            if (($i >= $size) && ($texto[$i] == ' ')){
                break;
            }
            $newstring .= $texto[$i];
        }
        $newstring = (strlen($newstring) >= $size)? $newstring.'...' : $newstring;
		return $newstring;
	}

	public static function geraListaCategoria($items,$nivel=0){
		
		foreach($items as $item){
			if ($nivel == 0){
				echo '<li><a href="/produto/'.$item->id.'-'.funcao::slug($item->descricao).'/"/><h2>'.$item->descricao.'</h2></a></li>';
			}else{
				echo '<li><a href="/produto/'.$item->id.'-'.funcao::slug($item->descricao).'/"/>'.$item->descricao.'</a></li>';
			}
			self::geraListaCategoria($item->Filhos,$nivel+1);
		}

	}

}