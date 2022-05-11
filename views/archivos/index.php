<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Archivos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="archivos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Archivos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'archivo_binario',
            'archivo_nombre',
            'archivo_peso',
            'archivo_tipo',
            //'id_asignatura',
            //'id_usuario',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Archivos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
