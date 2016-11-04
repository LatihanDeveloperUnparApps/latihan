<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Falkutas */

$this->title = 'Create Falkutas';
$this->params['breadcrumbs'][] = ['label' => 'Falkutas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="falkutas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
