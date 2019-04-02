<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use common\models\Provinsi;
use common\models\Kecamatan;
use common\models\Kelurahan;
use common\models\Kabupaten;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\widgets\DepDrop;

/* @var $this yii\web\View */
/* @var $model common\models\UserEditSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-edit-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>


	<?= $form->field($model, 'username') ?>

	<?php  echo $form->field($model, 'email') ?>

	<?php  echo $form->field($model, 'status') ?>

	<?php // echo $form->field($model, 'created_at') ?>

	<?php // echo $form->field($model, 'updated_at') ?>

	<?php  echo $form->field($model, 'fullname') ?>

	<?php // echo $form->field($model, 'address') ?>

	<?= 
	   $form->field($model, 'id_prov')->widget(Select2::classname(), [
			'data' => ArrayHelper::map(Provinsi::find()->orderBy(['nama'=>SORT_ASC])->all(), 'id_prov','nama'),
			'language' => 'en',
			'options' => ['placeholder' => 'Select a state ...'],
			'pluginOptions' => [
				'allowClear' => true
			],
		]);
	?>

	<?php /*echo 
		$form->field($model, 'id_kab')->widget(Select2::classname(), [
			'data' => ArrayHelper::map(Kabupaten::find()->orderBy(['nama'=>SORT_ASC])->all(), 'id_kab','nama'),
			'language' => 'en',
			'options' => ['placeholder' => 'Select a state ...'],
			'pluginOptions' => [
				'allowClear' => true
			],
		]);*/
	?>

	<?php /*echo 
		$form->field($model, 'id_kec')->widget(Select2::classname(), [
			'data' => ArrayHelper::map(Kecamatan::find()->orderBy(['nama'=>SORT_ASC])->all(), 'id_kec','nama'),
			'language' => 'en',
			'options' => ['placeholder' => 'Select a state ...'],
			'pluginOptions' => [
				'allowClear' => true
			],
		]);*/
	?>

	<?php  echo $form->field($model, 'nomorHandphone') ?>

	<?php // echo $form->field($model, 'nomorRumah') ?>

    <?= $form->field($model, 'active')->dropDownList(['both' => 'Both', 'user' => 'Active', 'banned' => 'Banned']) ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
