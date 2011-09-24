<?php
/**
* Yii extension implementing jquery uploadify-v2.1.0
* 
* Uploadify is a jQuery plugin that allows the easy integration of a multiple (or single) file uploads 
* on your website.  It requires Flash and any backend development language.  An array of options allow 
* for full customization for advanced users, but basic implementation is so easy that even coding novices 
* can do it.
* 
* See : http://www.uploadify.com
* 
* I freely stole code from the great JUI extension, all errors are mine though
* 
* This widget generates an <input type='file'> tag and the relevant uploadify.js code and includes
* 
* @package EuploadifyWidget 
* @author M. Betel
* @version 0.9
* @filesource EuploadifyWidget.php
* 
*/

class EuploadifyWidget extends CInputWidget 
{
	private $body = null;
    private $options = array();
    private $callbacks = array();
    private $baseUrl; 
	
    /**
    * Valid options for uploadify
    */
    protected $validOptions = array(
        'uploader'       => array('type'=>'string'),    // The relative path to the uploadify.swf file. 
        'script'         => array('type'=>'string'),    // The path to the backend script that will be processing your uploaded files.
        'checkScript'    => array('type'=>'string'),    // The relative path to the backend script that will check if the file selected already resides on the server.   
        'scriptData'     => array('type'=>'array'),    // An object containing name/value pairs of additional information you would like sent to the upload script. {’name’: ‘value’} 
        'fileDataName'   => array('type'=>'string'),    // The name of your files array in the upload server script.  Default = ‘Filedata’
        'method'         => array('type'=>'string', 'possibleValues'=>array('POST', 'GET')),    // Set the method for sending scriptData to the backend script. 
        'scriptAccess'   => array('type'=>'string'),    // The access mode for scripts in the flash file. If you are testing locally, set to ‘always’.   
        'folder'         => array('type'=>'string'),    // The path to the folder you would like to save the files to. Do not end the path with a ‘/’.     
        'queueID'        => array('type'=>'string'),    // The ID of the element you want to use as your file queue. By default, one is created on the fly below the ‘Browse’ button.
        'queueSizeLimit' => array('type'=>'integer'),   // The limit of the number of items that can be in the queue at one time. Default = 999.                            
        'multi'          => array('type'=>'boolean'),   // Set to true if you want to allow multiple file uploads.   
        'auto'           => array('type'=>'boolean'),   // Set to true if you want to allow multiple file uploads.
        'fileDesc'       => array('type'=>'string'),    // The text that will appear in the file type drop down at the bottom of the browse dialog box.
        'fileExt'        => array('type'=>'string'),    // A list of file extensions you would like to allow for upload. Format like ‘*.ext1;*. ext2;*.ext3′. fileDesc is required when using this option.
        'sizeLimit'      => array('type'=>'integer'),   // A number representing the limit in bytes for each upload. 
        'simUploadLimit' => array('type'=>'integer'),   // A limit to the number of simultaneous uploads you would like to allow. Default: 1  
        'buttonText'     => array('type'=>'string'),    // The text you would like to appear on the default button. Default = ‘BROWSE’
        'buttonImg'      => array('type'=>'string'),    // The path to the image you will be using for the browse button.
        'hideButton'     => array('type'=>'boolean'),   // Set to true if you want to hide the button image.
        'rollover'       => array('type'=>'boolean'),   // et to true if you would like to activate rollover states for your browse button. To prepare your browse button for rollover states, simple add the ‘over’ and ‘press’ states below the normal state in a single file.  
        'width'          => array('type'=>'integer'),   // The width of the button image / flash file. Default = 30   
        'height'         => array('type'=>'integer'),   // The height of the button image / flash file. If rollover is set to true, this should be 1/3 the height of the actual file. Default = 110
        'wmode'          => array('type'=>'string'),    // Set to transparent to make the background of the flash file transparent.     
        'cancelImg'      => array('type'=>'string'),    // The path to the default cancel image. Default = ‘cancel.png’                   
      );
    
    /**
    * Valid callbacks for uploadify
    */
    protected $validCallbacks = array(
        'onInit',
        'onCancel',
        'onSelect',
        'onSelectOnce',
        'onClearQueue',
        'onQueueFull',
        'onError',
        'onOpen',
        'onProgress',
        'onComplete',
        'onAllComplete',
        'onCheck',
    );
    
    /**
    * Make the code to be inserted in the view
    */
	public function run() 
	{
		$clientScript = Yii::app()->getClientScript(); 
        $dir = dirname(__FILE__);
        $this->baseUrl = Yii::app()->getAssetManager()->publish($dir);
		
        $clientScript->registerScriptFile($this->baseUrl . '/uploadify/jquery.uploadify.v2.1.0.min.js', CClientScript::POS_HEAD);
		$clientScript->registerScriptFile($this->baseUrl . '/uploadify/swfobject.js', CClientScript::POS_HEAD); 
		$clientScript->registerCssFile($this->baseUrl . '/uploadify/uploadify.css');
        
		list($name, $id) = $this->resolveNameID();
        $options = $this->makeOptions();
        $js =<<<EOP
$("#{$id}").uploadify({$options});
EOP;
		$clientScript->registerScript('Yii.'.get_class($this).'#'.$id, $js, CClientScript::POS_READY);
		
        $this->htmlOptions['id'] = $id;
		$this->htmlOptions['name'] = $id;
		$this->htmlOptions['type'] = 'file'; 
		$html = CHtml::tag('input', $this->htmlOptions, $this->body);
		echo $html;    
	}
    
    /**
    * From JUI
    * Check callbacks against valid callbacks
    * @param array $value user's callbacks
    * @param array $validCallbacks valid callbacks
    */
    protected static function checkCallbacks($value, $validCallbacks)
    {
        if (!empty($validCallbacks)) {
            foreach ($value as $key=>$val) {
                if (!in_array($key, $validCallbacks)) {
                    throw new CException(Yii::t('EUploadify', '{k} must be one of: {c}', array('{k}'=>$key, '{c}'=>implode(', ', $validCallbacks))));
                }
            }
        }
    }
    
    /**
    * From JUI extension
    * Check the options against the valid ones
    *
    * @param array $value user's options
    * @param array $validOptions valid options
    */
    protected static function checkOptions($value, $validOptions)
    {
        if (!empty($validOptions)) { 
            foreach ($value as $key=>$val) {
                
                if (!array_key_exists($key, $validOptions)) {
                    throw new CException(Yii::t('EUploadify', '{k} is not a valid option', array('{k}'=>$key)));
                }
                $type = gettype($val);    
                if ((!is_array($validOptions[$key]['type']) && ($type != $validOptions[$key]['type'])) || (is_array($validOptions[$key]['type']) && !in_array($type, $validOptions[$key]['type']))) {
                        throw new CException(Yii::t('EUploadify', '{k} must be of type {t}', 
                        array('{k}'=>$key,'{t}'=>$validOptions[$key]['type'])));
                }
                if (array_key_exists('possibleValues', $validOptions[$key])) {
                   if (!in_array($val, $validOptions[$key]['possibleValues'])) {
                        throw new CException(Yii::t('EUploadify', '{k} must be one of: {v}', array('{k}'=>$key, '{v}'=>implode(', ', $validOptions[$key]['possibleValues']))));
                   }
                }
                if (($type == 'array') && array_key_exists('elements', $validOptions[$key])) {
                        self::checkOptions($val, $validOptions[$key]['elements']);
                }
             
            }
        }
    }
   
    /**
    * Getter
    * @return array
    */
    public function getCallbacks()
    {
        return $this->callbacks;
    }
   
   /**
    * Setter
    * @param array $value callbacks
    */
    public function setCallbacks($value)
    {
        if (!is_array($value))
            throw new CException(Yii::t('EUploadify', 'callbacks must be an associative array'));
        self::checkCallbacks($value, $this->validCallbacks);
        $this->callbacks = $value;
    }
   
    /**
    * Getter
    * @return array
    */
    public function getOptions()
    {
        return $this->options;
    }
    
    /**
    * Setter
    * @param mixed $value
    */
    public function setOptions($value)
    {
        if (!is_array($value))
            throw new CException(Yii::t('EUploadify', 'options must be an array'));
        self::checkOptions($value, $this->validOptions);
        $this->options = $value;
    }

    /**
    * encode Options & Callbacks
    * @return string
    */
    protected function makeOptions()
    {
        // Set defaults
        if(!array_key_exists('uploader', $this->options))
            $this->options['uploader'] = $this->baseUrl . '/uploadify/uploadify.swf?PHPSESSID=' . session_id();
        if(!array_key_exists('cancelImg', $this->options))
            $this->options['cancelImg'] = $this->baseUrl . '/uploadify/cancel.png';   
        if(!array_key_exists('buttonText', $this->options))
            $this->options['buttonText'] = 'Browse';         
        $this->options = array_merge($this->options, $this->callbacks);
        $encodedOptions = self::encode($this->options);
        return $encodedOptions;  
    }    
	
    /**
    * Encode an array into a javascript array
    *
    * @param array $value
    * @return string
    */
    private static function encode($value)
    {
        $es=array();
        $n=count($value);
        if (($n)>0 && array_keys($value)!==range(0,$n-1)) {
            foreach($value as $k=>$v) 
            {
                if(is_bool($v) || is_numeric($v) || substr($k,0,2) == "on")         // || substr($k,0,2) == "on"
                {
                    if($v===true) $v = 'true';
                    if($v===false) $v = 'false';
                    $es[] = "'" . $k . "':" . $v ;
                } 
                elseif($k == 'scriptData')
                {
                    $sd ='';
                    foreach($v as $dkey=>$dval)
                    {
                        $sd .= "'" . $dkey ."':'" . $dval ."',";
                    }
                    $es[] = "'" . $k . "':{" . $sd . "}";              
                }  else
                    $es[] = "'" . $k . "':'" .$v . "'";
                
            }
            
            return '{'.implode(',',$es).'}';
        } else { 
            foreach($value as $v) 
            {
                $es[] = "'" . $v . "'";
            }
            return '[' . implode(',',$es) . ']';
        }
    }
}