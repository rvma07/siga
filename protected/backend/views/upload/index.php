<?php
$this->breadcrumbs=array(
	'Upload de Arquivos',
);
?>
<?php if($_GET['model']=='Produto'){
    $this->breadcrumbs=array(
            'Produtos'=>array('/produto/index/'),
            $model->nome =>array('/produto/view/','id'=>$model->id),
            'Upload de Arquivos',
        );
 ?>
        <h2>Enviar Fotos do Produto</h2>
 <?php  }else if($_GET['model']=='Receita'){
         $this->breadcrumbs=array(
            'Receitas'=>array('/receita/index/'),
            $model->nome =>array('/receita/view/','id'=>$model->id),
            'Upload de Arquivos',
        );
 ?>
        <h2>Enviar Fotos da Receita</h2>
 <?php  }else if($_GET['model']=='Banner'){
         $this->breadcrumbs=array(
            'Banner'=>array('/banner/index/'),
            $model->nome =>array('/banner/view/','id'=>$model->id),
            'Upload de Arquivos',
        );
 ?>
        <h2>Enviar Banner</h2>
 <?php }?>


<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
     	'attributes'=>array(
		'id',
		'nome',
	                        	        
	),
)); ?>
<h2 class="ui-widget-header">Enviar Fotos</h2>
<div class="ui-widget-content ">
<div id="listaup" class="ui-widget-content"></div>
<div id="controleup">

<?php
$this->widget('backend.extensions.uploadify.EuploadifyWidget',
    array(
        'name'=>'uploadme',
        'options'=> array(
            'uploader' => '/images/uploadify.swf',
            'script' => '/sisadm/upload/UploadedFiles/',
            'cancelImg' => '/images/cancel.png',
            'auto' => False,
            'multi' =>($_GET['multi']==0)? false : true,
            'folder' => './arquivo',
            'scriptData' => array('extraVar' => 1234, 'PHPSESSID' => session_id(), 'model'=>$_GET['model'], 'id'=>$_GET['id'], 'capa'=>$_GET['capa'], 'arq'=>$_GET['arq']),
            'fileDesc' => (!isset($_GET['ext'])) ? 'Imagens Permitida (*.jpg,*jpeg)' :'Arquivo permitido (*.pdf)', 
            'fileExt' => (!isset($_GET['ext'])) ? '*.jpg' :'*.pdf',
            'queueID'   => 'listaup',
            'buttonText' => 'Upload',
            'buttonImg' => '/css_backend/'.Yii::app()->user->Tema.'/images/'.Yii::app()->user->Tema.'.jpg',
            'width' => 160,
            'height' => 36,
            ),
        'callbacks' => array(
           'onError' => 'function(evt,queueId,fileObj,errorObj){alert("Error: " + errorObj.type + "\nInfo: " + errorObj.info);}',
           'onComplete' => 'function(){atualizarfoto()}',
           'onAllComplete'=>'function(){history.go(-1)}',
         //  'onCancel' => 'function(evt,queueId,fileObj,data){alert("Você acabou de Cancelar o Envio das Imagem");}',
        )
    ));
?>
<a href="javascript:$('#uploadme').uploadifyUpload();" class="btn ui-state-default ui-corner-all" style="display:block; width: 130px;"><span class="ui-icon ui-icon-arrowthickstop-1-n"></span>Enviar Arquivos</a>
<a href="javascript:$('#uploadme').uploadifyClearQueue();"class="btn ui-state-default ui-corner-all" style="display:block; width: 130px;"><span class="ui-icon ui-icon-closethick"></span>Cancelar Arquivos</a>
</div>
<div id="listaupcomplete" class="ui-widget-content">
 
       <ul id="fotos">
  
       </ul>


</div>
<div class="clearfix"></div>
</div>