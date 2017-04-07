<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('easyii', 'Login');
?>
<div class="content-box-bordered login-box box-with-help">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['layout' => 'horizontal',]) ?>
    <div class="form-group">
        <label for="inputEmail3b" class="control-label sr-only">Email</label>
        <div class="col-sm-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon ion-email"></i></span>
                <input name="LoginForm[username]" type="text" class="form-control" id="inputEmail3b" placeholder="Email">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3b" class="control-label sr-only">Password</label>
        <div class="col-sm-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon ion-locked"></i></span>
                <input name="LoginForm[password]" type="password" class="form-control" id="inputPassword3b" placeholder="Password">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label class="fancy-checkbox">
                <input type="checkbox" name="LoginForm[rememberMe]">
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


    <?php ActiveForm::end() ?>

    <p><em>Don't have an account yet?</em> <a href="#"><strong>Sign Up</strong></a></p>
    <button type="button" class="btn btn-link btn-login-help"><i class="icon ion-help-circled"></i></button>
</div>
<div class="login-separator text-center"><span>or sign up with</span></div>
<div class="text-center">
    <button type="button" class="btn btn-login-social btn-login-facebook"><span>Facebook</span></button>
    <button type="button" class="btn btn-login-social btn-login-twitter"><span>Twitter</span></button>
    <button type="button" class="btn btn-login-social btn-login-googleplus"><span>Google Plus</span></button>
</div>
