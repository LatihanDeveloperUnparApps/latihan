<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Falkutas */

$this->title = 'Update Falkutas: ' . $model->falkutas_id;
$this->params['breadcrumbs'][] = ['label' => 'Falkutas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->falkutas_id, 'url' => ['view', 'id' => $model->falkutas_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="falkutas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
