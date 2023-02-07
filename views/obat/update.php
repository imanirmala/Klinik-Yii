<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbObat $model */

$this->title = 'Update Tb Obat: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tb Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
