<div id="homeesq">
    
	<!--//acordeao-->
	    <div id="acordeon_teste" class="accordionWrapper">
			<!-- Menu 1 -->
			<div class="set">
				<div class="title">ALUNOS</div>
				<div class="content">
				   <a href="/sisadm/aluno"><img src="/images/icons/alunos/al_cadAluno.png" title="Cadastro de Aluno" width="50" height="50"></a>
				   <a href="/sisadm/matricula"><img src="/images/icons/alunos/al_matricula.png" title="Matr&iacute;cula" width="50" height="50"></a>
				   <a href="/sisadm/movimento"><img src="/images/icons/alunos/al_mov.png" title="Movimenta&ccedil;&atilde;o" width="50" height="50"></a>
				   <a href="/sisadm/chamada"><img src="/images/icons/alunos/al_chamada.png" title="Chamada" width="50" height="50"></a> 
				</div>
			</div><br/>
			<!-- Menu 2 -->
			<div class="set">
				<div class="title">RELATORIOS</div>
				<div class="content">
				   <a href="/sisadm/relatorio/aluno"><img src="/images/icons/relatorios/rel_lista.png" title="" width="50" height="50"></a>
				   <a href="/sisadm/?"><img src="/images/icons/relatorios/sis_info.png" title="" width="50" height="50"></a> 

				</div>
			</div>
			<!-- Menu 3 -->
			<div class="set">
				<div class="title">ADMINISTRATIVO</div>
				<div class="content">
				   <a href="/sisadm/unidade"><img src="/images/icons/adm/adm_unidade.png" title="Unidade" width="50" height="50"></a>
				   <a href="/sisadm/periodo"><img src="/images/icons/adm/adm_periodo.png" title="Per&iacute;odo" width="50" height="50"></a> 
				   <a href="/sisadm/serie"> <img src="/images/icons/adm/adm_serie.png" title="Ano" width="50" height="50"></a> 
				   <a href="/sisadm/sala"> <img src="/images/icons/adm/adm_sala.png" title="Turma" width="50" height="50"></a>
				   <a href="/sisadm/nees"> <img src="/images/icons/adm/adm_nees.png" title="NEES" width="50" height="50"></a>
				   <a href="/sisadm/saude"> <img src="/images/icons/adm/adm_saude.png" title="Sa&uacute;de" width="50" height="50"></a>
				   <a href="/sisadm/alergias"> <img src="/images/icons/adm/adm_alergia.png" title="Alergia" width="50" height="50"></a>
				   <a href="/sisadm/sexo"> <img src="/images/icons/adm/adm_sexo.png" title="Sexo" width="50" height="50"></a>
				   <a href="/sisadm/etnia"> <img src="/images/icons/adm/adm_etnia.png" title="Etnia" width="50" height="50"></a>
				   <a href="/sisadm/disciplinas"> <img src="/images/icons/adm/adm_disc.png" title="Disciplina" width="50" height="50"></a>
				   <a href="/sisadm/funcionario"> <img src="/images/icons/adm/adm_func.png" title="Funcionários" width="50" height="50"></a>
				   
				</div>
			</div>
		</div>
<!-- fim accordion -->
 </div>
<div id="homedir">

  <a name="ajuda"></a>
  <h2 class="ui-widget-header">Utilize aqui para enviar alguma d&uacutevida ou erro, referente ao Sistema Administrativo.</h2>
  <div class="ui-widget-content" style="padding: 10px;">
      <div class="form">
           <?php if(Yii::app()->user->hasFlash('suporte')): ?>
            <div class="flash-success">
                <?php echo Yii::app()->user->getFlash('suporte'); ?>
            </div>
           <?php else: ?>
           <?php $form=$this->beginWidget('CActiveForm'); ?>
          <p class="note">Campos com <span class="required">(*)</span> s&atildeo obrigat&oacuterios.</p>

               <div class="row">
                        <?php echo $form->labelEx($suporte,'assunto'); ?>
                        <?php echo $form->textField($suporte,'assunto',array('size'=>60,'maxlength'=>100)); ?>
                </div>

                <div class="row">
                   <?php echo $form->labelEx($suporte,'mensagem'); ?><br/>
                       <?php
                         $this->widget('backend.extensions.fckeditor.FCKEditorWidget', array(
                              "model"=>$suporte,
                              "attribute"=>'mensagem',
                              "height"=>'150px',
                              "width"=>'800px',
                              "toolbarSet"=>'Basic',
                              "fckeditor"=>Yii::app()->basePath."/../fckeditor/fckeditor.php",
                              "fckBasePath"=>Yii::app()->baseUrl."/fckeditor/",
                              "config" => array(
                                  "EditorAreaCSS"=> Yii::app()->request->baseUrl.'/css_backend/'.Yii::app()->user->tema.'/jquery.ui.all.css'),
                             )
                        );
                 ?>
               </div>
        <br/>

                <div class="row buttons">
                      <?php echo CHtml::submitButton('Enviar'); ?>
                     
                </div>

        <?php $this->endWidget(); ?>
        <?php endif; ?>
      </div>
    
      
  </div>

</div>
