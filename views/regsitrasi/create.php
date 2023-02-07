<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Regsitrasi $model */

$this->title = 'Create Regsitrasi';
$this->params['breadcrumbs'][] = ['label' => 'Regsitrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regsitrasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
