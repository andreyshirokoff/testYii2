<?php

namespace app\controllers;

use yii\rest\ActiveController;
use frontend\models\uer;
class UserController extends ActiveController
{
    public function actionActiveRecord()
    {
        $model = User::find()->all();
        return $this->render('active-record', [
            'model' => $model
        ]);
    }
}