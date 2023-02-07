<?php

use app\models\Regsitrasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\RegsitrasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Regsitrasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regsitrasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Regsitrasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'pasien.name',
            'tindakan.name',
            'tot_biaya',
            'deskripsi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Regsitrasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_registrasi' => $model->id_registrasi]);
                 }
            ],
        ],
    ]); ?>


</div>
