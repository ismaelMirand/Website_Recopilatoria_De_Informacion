<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Archivos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="archivos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'archivo_binario')->textInput() ?>

    <?= $form->field($model, 'archivo_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'archivo_peso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'archivo_tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_asignatura')->textInput() ?>

    <?= $form->field($model, 'id_usuario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
