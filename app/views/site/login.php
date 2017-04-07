<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <div class="container-fluid">
        <div class="content-box-bordered login-box box-with-help">
            <h1>Log in to your account</h1>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputEmail3b" class="control-label sr-only">Email</label>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon ion-email"></i></span>
                            <input type="email" class="form-control" id="inputEmail3b" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3b" class="control-label sr-only">Password</label>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon ion-locked"></i></span>
                            <input type="password" class="form-control" id="inputPassword3b" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="fancy-checkbox">
                            <input type="checkbox">
                            <span>Remember me</span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7">
                        <button type="submit" class="btn btn-success btn-block">Sign in</button>
                    </div>
                    <div class="col-md-5 text-right">
                        <a href="#"><em>forgot password?</em></a>
                    </div>
                </div>
            </form>
            <p><em>Don't have an account yet?</em> <a href="#"><strong>Sign Up</strong></a></p>
            <button type="button" class="btn btn-link btn-login-help"><i class="icon ion-help-circled"></i></button>
        </div>
        <div class="login-separator text-center"><span>or sign up with</span></div>
        <div class="text-center">
            <button type="button" class="btn btn-login-social btn-login-facebook"><span>Facebook</span></button>
            <button type="button" class="btn btn-login-social btn-login-twitter"><span>Twitter</span></button>
            <button type="button" class="btn btn-login-social btn-login-googleplus"><span>Google Plus</span></button>
        </div>
    </div>
</div>
