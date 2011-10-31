
<div id="homeesq">
	<!--//acodeao-->
			<div class="basic" style="float:left;"  id="list1a">
				<a> Calend&aacuterio </a>
					<div>
					<p>
						<div id = "Datepicker1"></div>
					</p>
					</div>

				<a>Aluno</a>
					<div>
						<div>
							<img src ="/images/aluno.jpg" alt="" width="50" height="50">
							<img src ="/images/matricula.jpg" alt="" width="50" height="50">
						</div>
					</div>
			<a>Relat&oacuterios</a>
			<div>
				<p>
					get two for three beer.
				</p>
				<p>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>

					Period.

				</p>
			</div>
			<a> Administrativo </a>
			<div>
					<href="./sisadm/unidade"> <img src ="/images/escola.png" alt="" width="50" height="50">
					<href="./sisadm/funcionario"> <img src ="/images/func.jpg" alt="" width="50" height="50">					
			    
			</div>	
		</div>
		<!-- fim acordeo -->
	
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
