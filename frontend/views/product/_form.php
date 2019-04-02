<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#product-idkategori").change(function () {
            if ($(this).val() == "1") {
                $(".field-product-harga").show();
            } else {
                $(".field-product-harga").hide();
                document.getElementById("product-harga").value = 0;
            }
        });
    });
</script>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use common\models\Kategori;
use common\models\KategoriBarang2;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'namaBarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idKategori')->dropDownList(ArrayHelper::map(Kategori::find()->andWhere(['<>','idKategori', 0])->orderBy(['namaKategori'=>SORT_DESC])->all(), 'idKategori','namaKategori')) ?>

    <?= 
        $form->field($model, 'idKategoriBarang2')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(KategoriBarang2::find()->andWhere(['<>','idKategoriBarang2', 0])->orderBy(['idKategoriBarang1'=>SORT_ASC])->all(), 'idKategoriBarang2','namaKategoriBarang'),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih kategori barang'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?php if($model->isNewRecord)
    { ?>
        <?= $form->field($model, 'harga')->textInput(['type'=>'number', 'value'=>0, 'maxlength' => true]) ?>
    <?php 
	}
	else
	{
	?>
		<?= $form->field($model, 'harga')->textInput(['type'=>'number', 'maxlength' => true]) ?>
	<?php } ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?php if(!$model->isNewRecord)
    { ?>
        <?= $form->field($model, 'sudahLaku')->dropDownList(['belum laku' => 'Belum laku',  'sudah laku' => 'Sudah laku', ]) ?>
    <?php } ?>

    <?= Html::a('Dengan mengklik tombol save dibawah anda menyetujui peraturan yang kami terapkan pada pengguna kami seperti tercantum pada link ini <br>(By clicking the save button below you agree to the rules that we apply to our users as listed on this link)', ['site/uploadtermsandagreement']) ?><br><br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-lg']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
