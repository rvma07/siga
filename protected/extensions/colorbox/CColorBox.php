<?php
class CColorBox extends CWidget
{
	public $target;
        public $modelo;
	public $config=array();

    public function run()
    {
		$assets = dirname(__FILE__).'/'.$this->modelo;
		$baseUrl = Yii::app()->assetManager->publish($assets);
		Yii::app()->clientScript->registerCoreScript('jquery');
		Yii::app()->clientScript->registerScriptFile($baseUrl . '/jquery.colorbox-min.js', 1);
		Yii::app()->clientScript->registerCssFile($baseUrl . '/colorbox.css');
		$config = CJavaScript::encode($this->config);
		Yii::app()->getClientScript()->registerScript(__CLASS__, "
			$('$this->target').colorbox($config);
		");
	}
}