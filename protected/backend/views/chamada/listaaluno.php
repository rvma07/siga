<center> - LISTA DE ALUNOS - </center><br><br>
 
<div style="float : left; width:50%;"> <center> NOME ALUNOS </center></div>
<div style="float : left; width:50%;"> CONTROLE DE FREQU&Ecirc;NCIA <br><br>
<form method="POST" >
	<?php 
	echo CHtml::label("Data da chamada","data_inicio");
	echo CHtml::textField("data_inicio","",array("rel"=>"data"));
	?><br /><?php
	foreach($alunos as $a): ?>
		<?php echo $a->aluno->nome_aluno; ?>
		<?php echo CHtml::radioButton("Aluno[".$a->cod_matricula."_".$a->salas[0]->cod_sala."_P]",false); ?>P
		<?php echo CHtml::radioButton("Aluno[".$a->cod_matricula."_".$a->salas[0]->cod_sala."_F]",false); ?>F
		<?php echo CHtml::radioButton("Aluno[".$a->cod_matricula."_".$a->salas[0]->cod_sala."_AM]",false); ?>AM
		<?php echo CHtml::radioButton("Aluno[".$a->cod_matricula."_".$a->salas[0]->cod_sala."_J]",false); ?>J
		<br />
	<?php endforeach; ?>
	<input type="submit" value="Enviar" /> 
</form>
</div>