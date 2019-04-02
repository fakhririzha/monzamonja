<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use common\models\NewsImage;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?php if(!$model->isNewRecord)
    { ?>
        <?= $form->field($model, 'date')->textInput() ?>
    <?php } ?>

    <?= $form->field($model, 'tipe')->dropDownList([ 'donasi' => 'Donasi', 'pengumuman' => 'Pengumuman', ]) ?>

    <?= $form->field($model, 'headline')->dropDownList([ 'headline' => 'Headline', 'bukan headline' => 'Bukan headline', ]) ?>


	<?= $form->field($model, 'isi')->widget(CKEditor::className(), [
        'options' => ['rows' => 20],
        'preset' => 'basic'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
