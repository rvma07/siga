<div id="menu" class="ui-widget-header">
    <a href="/sisadm/home/#ajuda" id="logout" class="ui-state-default ui-corner-all" style="width: 0px;"><span class="ui-icon ui-icon-help"></span></a>
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
												array('label'=>'Sexo', 'url'=>array('./sisadm/sexo')),
						                        array('label'=>'Etnia', 'url'=>array('./sisadm/etnia')),
												array('label'=>'Funcionário', 'url'=>array('./sisadm/funcionario')))),
                        array('label'=>'Dias Letivos', 'url'=>array('./sisadm/diasletivos')),
						array('label'=>'Chamada', 'url'=>array('./sisadm/chamada'),
							'items'=>array(
								array('label'=>'Realizar','url'=>array('./sisadm/chamada/realizar')))),
                        array('label'=>'Localidade', 'url'=>array('./sisadm/localidades')),
						array('label'=>'CEP', 'url'=>array('./sisadm/CEP')),
						array('label'=>'Matrícula', 'url'=>array('./sisadm/matricula')),
						array('label'=>'Movimentação', 'url'=>array('./sisadm/movimentacao')),
						array('label'=>'Função', 'url'=>array('./sisadm/funcao')),
						array('label'=>'Funcionário', 'url'=>array('./sisadm/funcionario')),
						array('label'=>'Disciplina', 'url'=>array('./sisadm/disciplina')),
						array('label'=>'Presença', 'url'=>array('./sisadm/presenca')),
						array('label'=>'Procedência', 'url'=>array('./sisadm/procedencia')),
						array('label'=>'Meu Perfil', 'url'=>array('./sisadm/usuarios/meuperfil/'.Yii::app()->user->id)),

                ),
    )); ?>
</div>
