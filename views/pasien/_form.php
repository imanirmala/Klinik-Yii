<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TbPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList(['Wanita' => 'Wanita', 'Pria' => 'Pria'])?>

    <?= $form->field($model, 'addres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
