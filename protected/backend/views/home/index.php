<div id="homeesq">
<h2 class="ui-widget-header">Informaçõess de Cadastro</h2>
<table class="ui-widget ui-widget-content tabela">
<thead>
<tr class="ui-widget-header">
    <th style="width:260px;">Modulos</th><th style="width:40px;">Qtde</th>
</thead>
<tbody>
<tr class="ui-widget-content" ><td>Tabela</td><td style="text-align: center; width:40px;"><?php // echo $dados["banner"]; ?></td></tr>

</tbody>
</table> 
    <h2 class="ui-widget-header">Calendário</h2>
             <div id="datepicker1"></div>
  </div>
<div id="homedir">

  <a name="ajuda"></a>
  <h2 class="ui-widget-header">Utilize este canal para enviar alguma dúvida ou erro, referente ao Sistema Administrativo para nós..</h2>
  <div class="ui-widget-content" style="padding: 10px;">
      <div class="form">
           <?php if(Yii::app()->user->hasFlash('suporte')): ?>
            <div class="flash-success">
                <?php echo Yii::app()->user->getFlash('suporte'); ?>
            </div>
           <?php else: ?>
           <?php $form=$this->beginWidget('CActiveForm'); ?>
          <p class="note">Campos com <span class="required">(*)</span> são obrigatórios.</p>

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
                              "width"=>'980px',
                              "toolbarSet"=>'Basic',
                              "fckeditor"=>Yii::app()->basePath."/../fckeditor/fckeditor.php",
                              "fckBasePath"=>Yii::app()->baseUrl."/fckeditor/",
                              "config" => array(
                                  "EditorAreaCSS"=> Yii::app()->request->baseUrl.'/css_backend/'.Yii::app()->user->Tema.'/jquery.ui.all.css'),
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
