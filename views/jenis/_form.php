<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Jenis;
?>

<div class="jenis-form">
    <div class="col-md-6">
    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'nm_jenis')->textInput() ?>
    <?= $form->field($model, 'ket')->textInput() ?>

    <div class ="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    </div>
    
</div>