<div id="menu" class="ui-widget-header">
    <a href="/sisadm/home/#ajuda" id="logout" class="ui-state-default ui-corner-all" style="width: 0px;"><span class="ui-icon ui-icon-help"></span></a>
    <a href="/sisadm/login/logout" id="logout" class="ui-state-default ui-corner-all" title="Tire suas dúvidas"><span class="ui-icon ui-icon-closethick"></span>Sair</a>
    <?php $this->widget('application.extensions.mbmenu.MbMenu',array(
                'activeCssClass'=>'ui-state-hover',
                'items'=>array(
                        array('label'=>'Home', 'url'=>array('./sisadm/home')),
                        array('label'=>'Categorias', 'url'=>array('./sisadm/categoria')),
                        array('label'=>'Grupos', 'url'=>array('./sisadm/grupos')),
                        array('label'=>'Jogos', 'url'=>array('./sisadm/jogos')),
                        array('label'=>'Produtos', 'url'=>array('./sisadm/produtos')),
                        array('label'=>'Receitas', 'url'=>array('./sisadm/receitas')),
                        array('label'=>'Sessões', 'url'=>array('./sisadm/secoes')),
                        array('label'=>'Usuários', 'url'=>array('./sisadm/usuarios'), 'visible'=>Yii::app()->user->Admin),
                        array('label'=>'Meu Perfil', 'url'=>array('./sisadm/usuarios/meuperfil/'.Yii::app()->user->id)),

                ),
    )); ?>
</div>
