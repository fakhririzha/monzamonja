<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\KategoriBarang1;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\KategoriBarang2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-barang2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idKategoriBarang1')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(KategoriBarang1::find()->where(['<>', 'idKategoriBarang1', 0])->orderBy(['namaKategoriBarang'=>SORT_ASC])->all(), 'idKategoriBarang1','namaKategoriBarang'),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih Kategori (First Level)'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'namaKategoriBarang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
