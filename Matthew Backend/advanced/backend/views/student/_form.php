<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Jurusan;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'student_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_npm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_jurusan_id')->dropDownList(
      ArrayHelper::map(Jurusan::find()->all(),'jurusan_id','jurusan_name'),
      ['prompt'=>'Select Jurusan']
    ) ?>

    <?= $form->field($model, 'student_picture')->textInput(['maxlength' => true]) ?>
    

    <?= $form->field($model, 'student_content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
