<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TbPasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'jenis_kelamin') ?>

    <?= $form->field($model, 'id_tindakan') ?>

    <?= $form->field($model, 'addres') ?>

    <?php // echo $form->field($model, 'biaya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
