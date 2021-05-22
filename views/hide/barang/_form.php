<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Jenis;
use app\models\Supplier;
?>

<div class="barang-form">
    <div class="col-md-6">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'kd_brg')->textInput() ?>
        <?= $form->field($model, 'nm_brg')->textInput() ?>
        <?= $form->field($model, 'satuan')->textInput() ?>
        <?= $form->field($model, 'id_jenis')->dropDownList(
            ArrayHelper::map(Jenis::find()->all(),'id','nm_jenis'),
            ['prompt' => 'Pilih']) -> label('id_jenis'); ?>
        <?= $form->field($model, 'id_supplier')->dropDownList(
            ArrayHelper::map(Supplier::find()->all(),'id','nm_supplier'),
            ['prompt' => 'Pilih']) -> label('id_supplier'); ?>
        <?= $form->field($model, 'harga')->textInput() ?>
        <?= $form->field($model, 'stok')->textInput() ?>

        <div class ="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>