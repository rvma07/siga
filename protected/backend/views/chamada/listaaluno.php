
 

<form method="POST" >
	<center>
	<?php 
	echo CHtml::label("Data da chamada","data_inicio");
	echo CHtml::textField("data_inicio","",array("rel"=>"data"));
	?><br />
	</center>
	
	<div style="width:603px; border:solid 1px #000; text-align:center; height:20px; font-size:20px; background-color:#CCC;"> - LISTA DE ALUNOS - </div>
	<div style="border:solid 1px #000; width:400px; height:20px; float:left; font-size:12px; text-align:center; background-color:#CCC; margin-top:2px;">NOME DO ALUNO</div>
	<div style="border:solid 1px #000; width:200px; height:20px; float:left; font-size:12px; margin-left:2px; text-align:center; background-color:#CCC; margin-top:2px;">CONTROLE DE FREQUENCIA</div>
	<?php
	foreach($alunos as $a): ?>
		<div style="border:solid 1px #000; width:400px; height:20px; float:left; margin-top:2px; font-size:12px;">&nbsp;
		<?php echo $a->aluno->nome_aluno; ?>
		</div>
		
		<div style="border:solid 1px #000; width:200px; height:20px; float:left; margin-top:2px; font-size:12px; text-align:center; margin-left:2px;">
		<?php echo CHtml::radioButton("Aluno[".$a->cod_matricula."_".$a->salas[0]->cod_sala."_P]",false); ?>P
		<?php echo CHtml::radioButton("Aluno[".$a->cod_matricula."_".$a->salas[0]->cod_sala."_F]",false); ?>F
		<?php echo CHtml::radioButton("Aluno[".$a->cod_matricula."_".$a->salas[0]->cod_sala."_AM]",false); ?>AM
		<?php echo CHtml::radioButton("Aluno[".$a->cod_matricula."_".$a->salas[0]->cod_sala."_J]",false); ?>J
		</div>
		<br />
	<?php endforeach; ?>
	<center>
	<input type="submit" value="Enviar" /> 
	</center>
</form>
</div>