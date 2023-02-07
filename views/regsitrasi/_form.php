<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Regsitrasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="regsitrasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
    	$dataPost=ArrayHelper::map(\app\models\Tpasien::find()->asArray()->all(), 'id_pasien', 'name');
        echo $form->field($model, 'id_pasien')
            ->dropDownList(
                $dataPost,           
                ['id_pasien'=>'name']
            );
    
    ?>

    <?php 
    	$dataPost=ArrayHelper::map(\app\models\TindakanPasien::find()->asArray()->all(), 'id_tindakan', 'name');
        echo $form->field($model, 'id_tindakan')
            ->dropDownList(
                $dataPost,           
                ['id_tindakan'=>'name']
            );
    
    ?>

    <?= $form->field($model, 'tot_biaya')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
