<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductHistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // echo  $form->field($model, 'idProductHistory') ?>

    <?= $form->field($model, 'actionDate') ?>

    <?php // echo  $form->field($model, 'idProduct') ?>

    <?php // echo  $form->field($model, 'idUser') ?>

    <?= $form->field($model, 'namaBarang') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?php // echo $form->field($model, 'idKategori') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'action') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
