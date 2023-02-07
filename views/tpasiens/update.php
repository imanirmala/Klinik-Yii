<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tpasien $model */

$this->title = 'Update Tpasien: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tpasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id_pasien' => $model->id_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tpasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
