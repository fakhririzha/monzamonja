<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use common\models\News;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\NewsImage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-image-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'idNews')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(News::find()->orderBy(['date'=>SORT_DESC, 'judul'=>SORT_ASC])->all(), 'idNews','judul'),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih Judul'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'namaFoto')->textInput(['maxlength' => true, 'placeholder'=>'Untuk Gambar utama wajib : diberikan judul title, berukuran 900px X 300px, dan memiliki tipe data .jpg; Jangan ada gambar dengan nama Foto yang sama']) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?= Html::a('Back to News', ['news/index'], ['class' => 'btn btn-primary']) ?>

    <?php ActiveForm::end(); ?>

</div>
