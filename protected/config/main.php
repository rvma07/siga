<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
//$backend=dirname(dirname(__FILE__));
//Yii::setPathOfAlias('backend', $backend);

return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'Sistema de Frequência Academica',
    'defaultController'=>'home',
    'language'=>'pt',
    // preloading 'log' component
    'preload'=>array('log'),
    // autoloading model and component classes
    'import'=>array(
        'application.backend.models.*',
        'application.backend.components.*',
        'application.models.*',
        'application.components.*',
        'application.backend.CA_Framework.*',
    ),
    'modules'=>array(
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'cejnr74',
        ),
    ),
    // application components
    'components'=>array(
        'user'=>array(
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName'=>false,
            'caseSensitive'=>false,
            'urlSuffix'=> '/',
            'rules'=>require(dirname(__FILE__).'/rotas.php'),
        ),
        'cache'=>array(
            'class'=>'system.caching.CFileCache',
        ),
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=sofa',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            //'schemaCachingDuration' => 600,
        ),
        'errorHandler'=>array(
            'errorAction'=>'home/erro',
        ),
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>'trace, info',
                    'categories'=>'system.*',
                ),
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>require(dirname(__FILE__).'/parametros.php'),

);
