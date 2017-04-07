<?php

namespace app\modules\dispatcher\catalog\menu\assets;

use app\modules\dispatcher\catalog\menu\assets\BaseAssetBundle;


class AssetBundle extends BaseAssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
