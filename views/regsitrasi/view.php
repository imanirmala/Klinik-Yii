<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Regsitrasi $model */

$this->title = $model->id_registrasi;
$this->params['breadcrumbs'][] = ['label' => 'Regsitrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="regsitrasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_registrasi' => $model->id_registrasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_registrasi' => $model->id_registrasi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_registrasi',
            'id_pasien',
            'id_tindakan',
            'tot_biaya',
            'deskripsi',
        ],
    ]) ?>

</div>
