<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asignaturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asignatura-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Asignatura', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_asignatura',
            'nombre',
            'profesor',
            'dificultad',
            'area',
            //'semestre',
            //'descripcion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Asignatura $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_asignatura' => $model->id_asignatura]);
                 }
            ],
        ],
    ]); ?>


</div>
