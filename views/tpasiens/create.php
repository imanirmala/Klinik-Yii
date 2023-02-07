<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tpasien $model */

$this->title = 'Create Tpasien';
$this->params['breadcrumbs'][] = ['label' => 'Tpasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tpasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
