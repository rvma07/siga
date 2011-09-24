<?php

class funcao {
        function slug($str) {
            $result = @iconv('UTF-8', 'ASCII//TRANSLIT', $str);
            $result = strtolower($result);
            $result = preg_replace("/[^a-z0-9\s-]/", "", $result);
            $result = trim(preg_replace("/\s+/", " ", $result));
            $result = preg_replace("/\s/", "-", $result);
            $result = preg_replace("/[\/_|+ -]+/", '-', $result);
            return $result;
        }

        function imagem($file,$tamanho) {
            $arq = explode('.', $file);
            $arq = $arq[0].'_'.$tamanho.'.'.$arq[1];
            return $arq;

        }
        
}
?>
