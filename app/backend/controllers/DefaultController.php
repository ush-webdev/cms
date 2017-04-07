<?php
namespace app\backend\controllers;

class DefaultController extends \app\backend\components\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}