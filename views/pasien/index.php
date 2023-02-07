<?php

use app\models\TbPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TbPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tb Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'jenis_kelamin',
            'addres',
            'biaya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TbPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pasien' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
