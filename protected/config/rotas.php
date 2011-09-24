<?php
return array(
   '<controller>/<action>' => '<controller>/<action>',
   'sisadm/gii'=>'gii',
   'sisadm/gii/<controller:\w+>'=>'gii/<controller>',
   'sisadm/gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
   'sisadm/' => 'login/login',
   'sisadm/<controller:\w+>'=>'<controller>/index',
   'sisadm/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
   'sisadm/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
   'login'=>'login/index',
   '<action>'=>'home/<action>',
   'home/produtinho'=>'home/teste',
   'home/aluno'=>'home/aluno',
 )

?>
