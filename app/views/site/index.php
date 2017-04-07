<?php
use yii\helpers\Url;
use app\modules\dispatcher\Module;

$this->title = 'Start page';
?>

<div class="site-index">




    <div class="col-md-12 container vertical-align-parent text-center">


        <h1>Welcome to  start page</h1>
        <a class="circle" href="<?= Url::to(['/admin/']) ?>">
            <i class="glyphicon glyphicon-wrench"></i>
            <br>
            Control Panel
        </a>


    </div>

    <div class="body-content">

        <?php if (isset($modules[Module::POSITION_MENU])) { ?>
            <div class="row">
                <?php foreach ($modules[Module::POSITION_MENU] as $module) {
                    echo $module;
                } ?>
            </div>
        <?php } ?>
    </div>

    <?php if (isset($modules[Module::POSITION_FOOTER])) { ?>
        <div class="row">
            <?php foreach ($modules[Module::POSITION_FOOTER] as $module) {
                echo $module;
            } ?>
        </div>
    <?php } ?>
</div>
