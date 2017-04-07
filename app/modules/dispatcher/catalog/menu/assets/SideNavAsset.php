<?php

namespace app\modules\dispatcher\catalog\menu\assets;

use app\modules\dispatcher\catalog\menu\assets\AssetBundle;

class SideNavAsset extends AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ );
        $this->setupAssets('css', ['css/sidenav']);
        $this->setupAssets('js', ['js/sidenav']);
        parent::init();
    }
}
