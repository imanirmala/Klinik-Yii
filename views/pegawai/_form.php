<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\TbPegawai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addres')->textInput(['maxlength' => true]) ?>

    <?php 
    	$dataPost=ArrayHelper::map(\app\models\TbWilayah::find()->asArray()->all(), 'id_wilayah', 'name');
        echo $form->field($model, 'id_wilayah')
            ->dropDownList(
                $dataPost,           
                ['id_wilayah'=>'name']
            );
    
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
