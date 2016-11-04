<?php

namespace frontend\controllers;

use Yii;
use yii\rest\ActiveController;
use common\models\Student;
use common\models\jurusan;
use yii\data\ActiveDataProvider;
use yii\db\ActiveQuery;



class StudentController extends ActiveController {
    public $modelClass = 'common\models\Student';

    public function behaviors(){
        $behaviors = parent::behaviors();
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
            'cors' => [
            	'Origin' => ['*'],
            	'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page', 'X-Pagination-Page-Count'],
            ],
        ];
        return $behaviors;
    }

    public function actions(){
        $actions = parent::actions();
        unset($actions['create']);
        return $actions;
    }

    public function actionIndex(){
        $activeData = new ActiveDataProvider([
            'query' => Student::find()->orderBy('student_id DESC'),
            'pagination' => [
                'defaultPageSize' => 12,
            ]
        ]);
        return $activeData;
    }
}
