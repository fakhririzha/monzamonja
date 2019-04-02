<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\KategoriBarang1;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\KategoriBarang2Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-barang2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idKategoriBarang1')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(KategoriBarang1::find()->orderBy(['namaKategoriBarang'=>SORT_ASC])->all(), 'idKategoriBarang1','namaKategoriBarang'),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih Kategori (First Level)'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'namaKategoriBarang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
