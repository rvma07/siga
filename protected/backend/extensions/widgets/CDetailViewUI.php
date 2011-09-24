<?php
Yii::import('zii.widgets.CDetailView');

class CDetailViewUI extends CDetailView
{
	public $itemTemplate="<tr class=\"{class}\"><th class=\"ui-state-priority-primary\">{label}</th><td>{value}</td></tr>\n";

	public function init()
	{
		$this->htmlOptions=array_merge($this->htmlOptions,array('class'=>'ui-widget ui-widget-content detail-view'));
		$this->baseScriptUrl=Yii::app()->getAssetManager()->publish(dirname(__FILE__).'/assets/detailviewui');
		parent::init();
	}

	/**
	 * Renders the detail view.
	 * This is the main entry of the whole detail view rendering.
	 */
	public function run()
	{
		$formatter=$this->getFormatter();
		echo CHtml::openTag($this->tagName,$this->htmlOptions);

		$n=is_array($this->itemCssClass) ? count($this->itemCssClass) : 0;
		foreach($this->attributes as $i=>$attribute)
		{
			if(is_string($attribute))
			{
				if(!preg_match('/^([\w\.]+)(:(\w*))?(:(.*))?$/',$attribute,$matches))
					throw new CException(Yii::t('zii','The attribute must be specified in the format of "Name:Type:Label", where "Type" and "Label" are optional.'));
				$attribute=array(
					'name'=>$matches[1],
					'type'=>isset($matches[3]) ? $matches[3] : 'text',
				);
				if(isset($matches[5]))
					$attribute['label']=$matches[5];
			}

			if (!isset($attribute['visible']))
				$attribute['visible']=true;

			if (!$attribute['visible'])
				continue;


			$tr=array('{label}'=>'', '{class}'=>$n ? $this->itemCssClass[$i%$n] : '');
			if(isset($attribute['cssClass']))
				$tr['{class}']=$attribute['cssClass'].' '.($n ? $tr['{class}'] : '');

			if(isset($attribute['label']))
				$tr['{label}']=$attribute['label'];
			else if(isset($attribute['name']))
			{
				if($this->data instanceof CModel)
				{
					$model=$this->data;
					if(strpos($attribute['name'],'.')!==false)
					{
						$segs=explode('.',$attribute['name']);
						$name=array_pop($segs);
						foreach($segs as $seg)
						{
							$relations=$model->getMetaData()->relations;
							if(isset($relations[$seg]))
								$model=CActiveRecord::model($relations[$seg]->className);
							else
								break;
						}
					}
					else
						$name=$attribute['name'];
					$tr['{label}']=$model->getAttributeLabel($name);
				}
				else
					$tr['{label}']=ucwords(trim(strtolower(str_replace(array('-','_','.'),' ',preg_replace('/(?<![A-Z])[A-Z]/', ' \0', $attribute['name'])))));
			}

			if(!isset($attribute['type']))
				$attribute['type']='text';
			if(isset($attribute['value']))
				$value=$attribute['value'];
			else if(isset($attribute['name']))
				$value=CHtml::value($this->data,$attribute['name']);
			else
				$value=null;

			$tr['{value}']=$value===null ? $this->nullDisplay : $formatter->format($value,$attribute['type']);

			echo strtr(isset($attribute['template']) ? $attribute['template'] : $this->itemTemplate,$tr);
		}

		echo CHtml::closeTag($this->tagName);
	}

}
