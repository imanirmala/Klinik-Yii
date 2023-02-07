<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Regsitrasi $model */

$this->title = 'Update Regsitrasi: ' . $model->id_registrasi;
$this->params['breadcrumbs'][] = ['label' => 'Regsitrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_registrasi, 'url' => ['view', 'id_registrasi' => $model->id_registrasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="regsitrasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
