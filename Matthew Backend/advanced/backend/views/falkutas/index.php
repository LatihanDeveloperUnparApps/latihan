<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FalkutasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Falkutas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="falkutas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Falkutas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'falkutas_id',
            'falkutas_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
