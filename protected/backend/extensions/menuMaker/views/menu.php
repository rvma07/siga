<div id="menu" class="ui-widget-header">
    <a href="/sisadm/home/#ajuda"  id="logout" class="ui-state-default ui-corner-all" style="width: 0px;"><span class="ui-icon ui-icon-help"></span></a>
    <a href="/sisadm/login/logout" id="logout" class="ui-state-default ui-corner-all" title="Tire suas dúvidas"><span class="ui-icon ui-icon-closethick"></span>Sair</a>
    <?php $this->widget('application.extensions.mbmenu.MbMenu',array(
                'activeCssClass'=>'ui-state-hover',
                'items'=>array(
                        array('label'=>'Home', 'url'=>array('./sisadm/home')),
						array('label'=>'Administrativo', 'url'=>array('./sisadm/administrativo'),
							 'items'=>array(	array('label'=>'Unidade', 'url'=>array('./sisadm/unidade')),
							                	array('label'=>'Periodo', 'url'=>array('./sisadm/periodo')),
						                        array('label'=>'Ano', 'url'=>array('./sisadm/serie')),
						                        array('label'=>'Sala', 'url'=>array('./sisadm/sala')),
												array('label'=>'NEES', 'url'=>array('./sisadm/nees')),
												array('label'=>'Saude', 'url'=>array('./sisadm/saude')),
												array('label'=>'Alergia', 'url'=>array('./sisadm/alergias')),
												array('label'=>'Sexo', 'url'=>array('./sisadm/sexo')),
						                        array('label'=>'Etnia', 'url'=>array('./sisadm/etnia')),
												array('label'=>'Funcionario', 'url'=>array('./sisadm/funcionario')))),
                        array('label'=>'Cadastro de Alunos', 'url'=>array('./sisadm/aluno')),
						array('label'=>'Dias Letivos', 'url'=>array('./sisadm/diasLetivos')),
						array('label'=>'Chamada', 'url'=>array('./sisadm/chamada')),
						array('label'=>'CEP', 'url'=>array('./sisadm/CEP')),
						array('label'=>'Matricula', 'url'=>array('./sisadm/matricula')),
						array('label'=>'Movimentacao', 'url'=>array('./sisadm/movimentacao')),
						array('label'=>'Funçaoo', 'url'=>array('./sisadm/funcao')),
						array('label'=>'Disciplina', 'url'=>array('./sisadm/disciplinas')),
						array('label'=>'Presenca', 'url'=>array('./sisadm/presenca')),
						array('label'=>'Procedencia', 'url'=>array('./sisadm/procedencia')),
						
                ),
    )); ?>
</div>
