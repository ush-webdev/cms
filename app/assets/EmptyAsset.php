<?php
namespace app\assets;

class EmptyAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        'queenadmin/css/ionicons.css',
        'queenadmin/css/main.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700',
    ];
    public $js = [
        'queenadmin/js/jquery/jquery-2.1.0.min.js',
        'queenadmin/js/bootstrap/bootstrap.js',
        'queenadmin/js/queen-form-layouts.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
