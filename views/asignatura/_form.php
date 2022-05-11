<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Asignatura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asignatura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_asignatura')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profesor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dificultad')->textInput() ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'semestre')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
