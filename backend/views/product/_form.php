<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use common\models\Kategori;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?php //echo  $form->field($model, 'namaBarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'banned' => 'Banned', ]) ?>

    <?php //echo  $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?php //echo  $form->field($model, 'idKategori')->dropDownList(ArrayHelper::map(Kategori::find()->orderBy(['namaKategori'=>SORT_DESC])->all(), 'idKategori','namaKategori')) ?>

    <?php //echo  $form->field($model, 'harga')->textInput() ?>

    <?php //echo $form->field($model, 'foto')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
