<?php
namespace app\backend\assets;

class AdminAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        'queenadmin/css/ionicons.css',
        'queenadmin/css/main.css',
    ];
    public $js = [
    //    'queenadmin/js/jquery/jquery-2.1.0.min.js',
        'queenadmin/js/bootstrap/bootstrap.js',
    //    'queenadmin/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js',
        'queenadmin/js/queen-common.js',
    //    'queenadmin/js/queen-elements.js',
     ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
      //  'yii\easyii\assets\SwitcherAsset',
    ];
    /*
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
    */
}
