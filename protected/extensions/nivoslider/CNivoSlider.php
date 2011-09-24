<?php
class CNivoSlider extends CWidget
{
	public $target;
   	public $config=array();

    public function run()
    {
		$assets = dirname(__FILE__).'/assets';
		$baseUrl = Yii::app()->assetManager->publish($assets);
		Yii::app()->clientScript->registerCoreScript('jquery');
                Yii::app()->clientScript->registerScriptFile($baseUrl . '/hoverIntent.js', 1);
		Yii::app()->clientScript->registerScriptFile($baseUrl . '/jquery.nivo.slider.pack.js', 1);
		Yii::app()->clientScript->registerCssFile($baseUrl . '/nivo-slider.css');
		$config = CJavaScript::encode($this->config);
		Yii::app()->getClientScript()->registerScript(__CLASS__, "
			$('$this->target').nivoSlider($config);
		");
	}
}