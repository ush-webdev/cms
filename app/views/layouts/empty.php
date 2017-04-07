<?php
use yii\helpers\Html;

$asset = \app\assets\EmptyAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Yii::t('easyii', 'Control Panel') ?> - <?= Html::encode($this->title) ?></title>

        <?php $this->head() ?>
    </head>
    <body class="middle-content page-login-social">
<?php $this->beginBody() ?>
<div class="container-fluid">
    <?= $content ?>
</div>
<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>