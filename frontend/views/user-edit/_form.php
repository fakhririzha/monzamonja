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

/* @var $this yii\web\View */
/* @var $model common\models\UserEdit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-edit-form">

	<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

	<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'address')->textArea(['rows' => 3]) ?>

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

    <?php /*echo 
        $form->field($model, 'id_kel')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Kelurahan::find()->orderBy(['nama'=>SORT_ASC])->all(), 'id_kel','nama'),
            'language' => 'en',
            'options' => ['placeholder' => 'Select a state ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);*/
    ?>

	<?= $form->field($model, 'nomorHandphone')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'nomorRumah')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'file')->fileInput() ?>


	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
