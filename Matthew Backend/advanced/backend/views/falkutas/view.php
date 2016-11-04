<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Falkutas */

$this->title = $model->falkutas_id;
$this->params['breadcrumbs'][] = ['label' => 'Falkutas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="falkutas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->falkutas_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->falkutas_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'falkutas_id',
            'falkutas_name',
        ],
    ]) ?>

</div>
