<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use common\models\Provinsi;
use common\models\Kecamatan;
use common\models\Kelurahan;
use common\models\Kabupaten;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

include_once("../../analyticstracking.php");

$this->title = 'Daftar (Signup)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
	<header>
	<h1><?= Html::encode($this->title) ?></h1>

	<p>Isi formulir dibawah untuk mendaftar (Please fill out the following fields to signup) :</p>
	</header>

	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(['id' => 'form-signup'], ['options'=>['enctype'=>'multipart/form-data']]); ?>

				<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

				<?= $form->field($model, 'email') ?>

				<?= $form->field($model, 'password')->passwordInput() ?>

				<?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'address')->textArea(['rows' => 3]) ?>

				<?= 
					$form->field($model, 'id_prov')->widget(Select2::classname(), [
						'data' => ArrayHelper::map(Provinsi::find()->andWhere(['<>','id_prov', 0])->orderBy(['nama'=>SORT_ASC])->all(), 'id_prov','nama'),
						'language' => 'en',
						'options' => ['placeholder' => 'Pilih provinsi asal anda'],
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
					]); */
				?>

				<?php /*echo 
					$form->field($model, 'id_kec')->widget(Select2::classname(), [
						'data' => ArrayHelper::map(Kecamatan::find()->orderBy(['nama'=>SORT_ASC])->all(), 'id_kec','nama'),
						'language' => 'en',
						'options' => ['placeholder' => 'Select a state ...'],
						'pluginOptions' => [
							'allowClear' => true
						],
					]); */
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

				<?= $form->field($model, 'nomorHandphone')->textInput(['maxlength' => true, 'placeholder' => 'Masukan dengan awalan 08 tanpa pemisah, misalnya 081234567890']) ?>

				<?= $form->field($model, 'nomorRumah')->textArea(['maxlength' => true, 'placeholder' => 'Masukan dengan awalan kode daerah tanpa pemisah, misalnya 0611234567']) ?>

				<?= $form->field($model, 'file')->fileInput() ?>

				<?= Html::a('Dengan mengklik tombol signup dibawah anda menyetujui peraturan yang kami terapkan pada pengguna kami seperti tercantum pada link ini <br>(By clicking the signup button below you agree to the rules that we apply to our users as listed on this link)', ['site/uploadtermsandagreement']) ?><br><br>

				<div class="form-group">
					<?= Html::submitButton('Signup', ['class' => 'btn btn-primary btn-lg', 'name' => 'signup-button']) ?>
				</div>

			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
