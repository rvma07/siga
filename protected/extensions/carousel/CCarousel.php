<?php
class CCarousel extends CWidget
{
	public $target;
   	public $config=array();

    public function run()
    {
		$assets = dirname(__FILE__).'/assets';
		$baseUrl = Yii::app()->assetManager->publish($assets);
		Yii::app()->clientScript->registerCoreScript('jquery');
                Yii::app()->clientScript->registerScriptFile($baseUrl . '/jcarousellite_1.0.1.min.js', 1);
		Yii::app()->clientScript->registerScriptFile($baseUrl . '/jquery.mousewheel.min.js', 1);
	        $config = CJavaScript::encode($this->config);
		Yii::app()->getClientScript()->registerScript(__CLASS__, "
			$('$this->target').jCarouselLite($config);
		");
	}
}