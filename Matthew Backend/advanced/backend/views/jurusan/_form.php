<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Falkutas;

/* @var $this yii\web\View */
/* @var $model common\models\Jurusan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jurusan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jurusan_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'falkutas_id')->dropDownList(
      ArrayHelper::map(Falkutas::find()->all(),'falkutas_id','falkutas_name'),
      ['prompt'=>'Select Falkutas']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
