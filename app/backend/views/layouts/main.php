<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\backend\assets\AdminAsset;

$asset = AdminAsset::register($this);
$moduleName = $this->context->module->id;
?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Yii::t('easyii', 'Control Panel') ?> - <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="fixed-top-active dashboard">
<?php $this->beginBody() ?>
<!-- WRAPPER -->
<div class="wrapper">
    <!-- TOP NAV BAR -->
    <nav class="top-bar navbar-fixed-top" role="navigation">
        <div class="logo-area">
            <a href="#" id="btn-nav-sidebar-minified" class="btn btn-link btn-nav-sidebar-minified pull-left"><i class="icon ion-arrow-swap"></i></a>
            <a class="btn btn-link btn-off-canvas pull-left"><i class="icon ion-navicon"></i></a>
            <div class="logo pull-left">
                <img src="<?= $asset->baseUrl ?>/queenadmin/img/queenadmin-logo.png" alt="QueenAdmin Logo" />
            </div>
        </div>
        <div class="top-bar-right pull-right">
            <div class="action-group visible-lg-inline-block">
                <a href="<?= Url::to(['/']) ?>" class="pull-left"><i class="glyphicon glyphicon-home"></i>
                    <?= Yii::t('easyii', 'Open site') ?>
                </a>
            </div>
            <div class="logged-user">
                <div class="btn-group">
                    <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $asset->baseUrl ?>/queenadmin/img/user-loggedin.png" alt="Sebastian" /><span class="name">Sebastian <i class="icon ion-ios-arrow-down"></i></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">
                                <i class="icon ion-ios-person"></i>
                                <span class="text">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ion-ios-gear"></i>
                                <span class="text">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/admin/sign/out']) ?>">
                                <i class="icon ion-power"></i>
                                <span class="text"><?= Yii::t('easyii', 'Logout') ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- div оставлен для наличия отсупа предыдущего блока от края экрана-->
            <div class="action-group visible-lg-inline-block"></div>
        </div>
    </nav>
    <!-- END TOP NAV BAR -->
    <!-- COLUMN LEFT -->
    <div id="col-left" class="col-left">
        <div class="main-nav-wrapper">
            <nav id="main-nav" class="main-nav">
                <h3>MAIN</h3>
                <ul class="main-menu">
                    <li class="has-submenu active">
                        <a href="#" class="submenu-toggle"><i class="icon ion-ios-speedometer-outline"></i><span class="text">Dashboards</span></a>
                        <ul class="list-unstyled sub-menu collapse in">
                            <li class="active"><a href="index.html"><span class="text">Dashboard v1</span></a></li>
                            <li><a href="index2.html"><span class="text">Dashboard v2</span></a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#" class="submenu-toggle"><i class="icon ion-ios-paper-outline"></i><span class="text">Forms</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="form-fancy-elements.html"><span class="text">Fancy Elements</span></a></li>
                            <li><a href="form-inplace-editing.html"><span class="text">In-place Editing</span></a></li>
                        </ul>
                    </li>
                    <li><a href="widgets.html"><i class="icon ion-ios-color-wand-outline"></i><span class="text">Widgets</span></a></li>
                 </ul>
                <h3>ESSENTIALS</h3>
                <ul class="main-menu">
                    <li class="has-submenu">
                        <a href="#" class="submenu-toggle"><i class="icon ion-ios-pie-outline"></i><span class="text">Charts</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li class="active"><a href="charts-basic.html"><span class="text">Basic</span></a></li>
                            <li><a href="charts-interactive.html"><span class="text">Interactive Charts</span></a></li>
                        </ul>
                    </li>
                    <li><a href="maps.html"><i class="icon ion-ios-world-outline"></i><span class="text">Maps</span></a></li>
                    <li><a href="typography.html"><i class="icon ion-ios-compose-outline"></i><span class="text">Typography</span></a></li>
                    <li class="has-submenu">
                        <a href="#" class="submenu-toggle"><i class="icon ion-navicon"></i><span class="text">Menu Levels</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li class="has-submenu">
                                <a href="#" class="submenu-toggle"><span class="text">Second Lvl A</span></a>
                                <ul class="list-unstyled sub-menu collapse">
                                    <li><a href="#"><span class="text">Third Lvl A1</span></a></li>
                                    <li><a href="#"><span class="text">Third Lvl A2</span></a></li>
                                 </ul>
                            </li>
                            <li><a href="#"><span class="text">Second Lvl B</span></a></li>
                            <li><a href="#"><span class="text">Second Lvl C</span></a></li>
                            <li><a href="#"><span class="text">Second Lvl D</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END COLUMN LEFT -->
    <!-- COLUMN RIGHT -->
    <div id="col-right" class="col-right ">
        <div class="container-fluid primary-content">
            <!-- PRIMARY CONTENT HEADING -->
            <div class="primary-content-heading clearfix">
                <h2>DASHBOARD</h2>
            <?= $content ?>
            </div>
        </div>
        <div class="right-sidebar">
            <!-- CHAT -->
            <div class="widget widget-chat-contacts">
                <div class="widget-header clearfix">
                    <h3 class="sr-only">CHAT</h3>
                    <div class="btn-group btn-group-justified widget-header-toolbar visible-lg">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-xs"><i class="icon ion-plus-circled"></i> Add</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle btn-xs btn-success" data-btnclass="btn-success" data-toggle="dropdown">Online <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right chat-status" role="menu">
                                <li><a href="#" class="online" data-btnclass="btn-success">Online</a></li>
                                <li><a href="#" class="away" data-btnclass="btn-warning">Away</a></li>
                                <li><a href="#" class="busy" data-btnclass="btn-danger">Busy</a></li>
                                <li><a href="#" class="offline" data-btnclass="btn-default">Offline</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="widget-content">
                    <strong>Online (4)</strong>
                    <ul class="list-unstyled chat-contacts">
                        <li>
                            <a href="#" id="theusername"><img src="assets/img/user1.png" class="img-circle" alt="Antonius">Antonius</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/user2.png" class="img-circle" alt="Antonius">Michael Smith</a>
                        </li>
                        <li class="away">
                            <a href="#"><img src="assets/img/user3.png" class="img-circle" alt="Antonius">Stella Ray</a>
                        </li>
                        <li class="busy">
                            <a href="#"><img src="assets/img/user4.png" class="img-circle" alt="Antonius">Jane Doe</a>
                        </li>
                    </ul>
                    <strong>Offline (6)</strong>
                    <ul class="list-unstyled chat-contacts contacts-offline">
                        <li>
                            <a href="#"><img src="assets/img/user5.png" class="img-circle" alt="John Simmons">John Simmons</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/user6.png" class="img-circle" alt="Jack Bay">Jack Bay</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/user7.png" class="img-circle" alt="Daraiana">Daraiana</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/user8.png" class="img-circle" alt="Alessio Ferrara">Alessio Ferrara</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/user9.png" class="img-circle" alt="Sorana">Sorana</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/user10.png" class="img-circle" alt="Regan Morton">Regan Morton</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END CHAT -->
        </div>
    </div>
    <!-- END COLUMN RIGHT -->
</div>
<!-- END WRAPPER -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
