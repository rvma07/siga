<?php

$backend=dirname(dirname(__FILE__));
$frontend=dirname($backend);
Yii::setPathOfAlias('backend', $backend);

$frontendArray=require($frontend.'/config/main.php');

// This is the main Web application backend configuration. Any writable
// CWebApplication properties can be configured here.
$backendArray=array(
    'basePath' => $frontend,
    'language'=>'pt',
    'name'=>'Sistema de Frequência Academica',
    'controllerPath' => $backend.'/controllers',
    'viewPath' => $backend.'/views',
    'runtimePath' => $backend.'/runtime',

    // autoloading model and component classes
    'import'=>array(
        'backend.models.*',
        'backend.components.*',
        'backend.CA_Framework.*',
        'application.models.*',
        'application.extensions.*',
    ),

    'modules'=>array(
        'gii'=>array(
            'class'=>'backend.extensions.gii-sisadm.GiiModule',
            'password'=>'a12b25',
                          
        ),
    ),

    // main is the default layout
    'layout'=>'main',
    // alternate layoutPath
    'layoutPath'=>dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'layouts'.DIRECTORY_SEPARATOR,

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName'] and MParams class
    	
    'params'=>require(dirname(__FILE__).'/parametros.php'),

    // application components
    'homeUrl'=>array('home/index'),
    'components'=>array(
        'user'=>array(
                    'class' => 'WebUser',
	            'allowAutoLogin'=>true,

                    'loginUrl'=>array('/sisadm/'),
                    
	        ),
        
        'urlManager'=>array(
            'urlSuffix'=> '',
            'showScriptName'=>false,
            'caseSensitive'=>false,
            'rules'=>require(dirname(__FILE__).'/rotas.php'),
        ),
        		'log'=>array(
                    'class'=>'CLogRouter',
                    'routes'=>array(
//                        array(
//                            'class'=>'CWebLogRoute'
//                        ),
                        array(
                            'class'=>'CFileLogRoute',
                            'levels'=>'trace, info',
                            'categories'=>'system.*'
                        ),
//                        array(
//                            'class'=>'CEmailLogRoute',
//                            'levels'=>'error, warning',
//                            'emails'=>'suporte@beta.com.br',
//                        ),

                        ),
                            ),

    ),
);

if(!function_exists('w3_array_union_recursive'))
{
    /**
     * This function does similar work to $array1+$array2,
     * except that this union is applied recursively.
     * @param array $array1 - more important array
     * @param array $array2 - values of this array get overwritten
     * @return array
     */
    function w3_array_union_recursive($array1,$array2)
    {
        $retval=$array1+$array2;
        foreach($array1 as $key=>$value)
        {
            if(is_array($array1[$key]) && is_array($array2[$key]))
                $retval[$key]=w3_array_union_recursive($array1[$key],$array2[$key]);
        }
        return $retval;
    }
}

return w3_array_union_recursive($backendArray,$frontendArray);
?>
