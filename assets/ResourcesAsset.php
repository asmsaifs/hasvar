<?php

namespace app\assets;

class ResourcesAsset extends \luya\web\Asset
{
    public $sourcePath = '@app/resources';
    
    public $js = [
    	'js/bootstrap.min.js',
    ];
    
    public $css = [
        //'bootstrap/bootstrap.min.css',
        //'bootstrap/bootstrap-theme.min.css',
		'css/bootstrap.min.css',
        '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',		
		'//fonts.googleapis.com/css?family=Rock+Salt|Shadows+Into+Light>',
        //'css/font-awesome.min.css',
		'css/templatemo_style.css',
		'css/style.css',
		'css/nav.css',
    ];
    
    public $publishOptions = [
    	'only' => [
    		//'bootstrap/*',
    		'css/*',
    	    'js/*',
    	]
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
