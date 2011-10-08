<?php

     function divisao ($a, $b)
     {
      if ($b == 0)
       {
        throw new Exception ('Divisao por Zero');
       } else
             {
              return $a/$b;
             }
     }
     try
        {
         echo divisao(1,0);
        }catch (Exception $e)
         {
          echo $e->getMessage();
          }
?>
