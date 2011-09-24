<?php
/*
 * Created on 01.01.2009
 *
 * Copyright: Christian Kütbach
 *
 * GNU LESSER GENERAL PUBLIC LICENSE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * Requirements:
 * The FCK-Editor have to be installed and configured. The Editor itself is
 * not includet to this extension.
 *
 * This extension have to be installed into:
 * <Yii-Application>/proected/extensions/fckeditor
 *
 * Usage:
 * <?php $this->widget('application.extensions.fckeditor.FCKEditorWidget',array(
 * 			"model"			=>	$pages,
 * 			"property"		=>	'content',
 * 			"height"		=>	'400px',
 * 			"width"			=>	'100%',
 * 			"fckeditor"		=>	Yii::app()->basePath."/../fckeditor.php",
 * 			"fckBasePath"	=>	Yii::app()->baseUrl."/",
 * 			"css"			=>	Yii::app()->baseUrl.'/css/index.css'
 * ) ); ?>
 */

class FCKEditorWidget extends CInputWidget
{



	public $height = "375px";
	public $width = "100%";
	public $config;
	public $fckeditor;
	public $fckBasePath;
	public $toolbarSet;

	public function run()
	{
		if(!isset($this->fckeditor)){
			throw new CHttpException(500,'"fckeditor" have to be set!');
		}
		if(!isset($this->fckeditor)){
			throw new CHttpException(500,'"fckBasePath" have to be set!');
		}
		if(!isset($this->model)){
			throw new CHttpException(500,'"model" have to be set!');
		}
		if(!isset($this->attribute)){
			throw new CHttpException(500,'"attribute" have to be set!');
		}
		if(!isset($this->toolbarSet)){
			$this->toolbarSet = "Default";
		}
		$controller=$this->controller;
		$action=$controller->action;
		$this->render('fCKEditorWidget',array(
			"fckBasePath"=>$this->fckBasePath,
			"fckeditor"=>$this->fckeditor,
			"model"=>$this->model,
			"attribute"=>$this->attribute,
			"height"=>$this->height,
			"width"=>$this->width,
			"toolbarSet"=>$this->toolbarSet,
			"config"=>$this->config,
		));
	}
}
?>