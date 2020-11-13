<?php

namespace frontend\controllers;

class ManagerController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new \app\models\Manager;

        return $this->render('Manager', ['model'=> $model]);
    }

}
