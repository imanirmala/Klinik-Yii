<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbPegawai $model */

$this->title = 'Update Tb Pegawai: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tb Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
