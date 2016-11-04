<?php

namespace frontend\controllers;

use Yii;
use yii\rest\ActiveController;
use common\models\Test;
use yii\data\ActiveDataProvider;




class TestController extends ActiveController {
    public $modelClass = 'common\models\Test';

    public function actions(){
        $actions = parent::actions();
        unset($actions['create']);
        return $actions;
    }

    public function actionCreate(){
        $model = new Test();
        $model->load(Yii::$app->request->post(),'');
        $model->save();
        return $model;
    }




}
