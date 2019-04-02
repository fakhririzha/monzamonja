<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#productsearch-idkategori").change(function () {
            if ($(this).val() == "1") {
                $(".field-productsearch-hargamax").show();
                $(".field-productsearch-hargamin").show();
            } else {
                $(".field-productsearch-hargamin").hide();
                $(".field-productsearch-hargamax").hide();
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
use common\models\Provinsi;
use common\models\Kecamatan;
use common\models\Kelurahan;
use common\models\Kabupaten;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php //echo $form->field($model, 'idProduct') ?>

    <?php //echo $form->field($model, 'idUser') ?>

    <?= $form->field($model, 'namaBarang')->textInput(['maxlength' => true]) ?>

    <?php // echo $form->field($model, 'date') ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idKategori')->dropDownList(ArrayHelper::map(Kategori::find()->orderBy(['idKategori'=>SORT_ASC])->all(), 'idKategori','namaKategori')) ?>

    <?= $form->field($model, 'idKategoriBarang2')->dropDownList(ArrayHelper::map(KategoriBarang2::find()->andWhere(['<>','idKategoriBarang2', 0])->orderBy(['idKategoriBarang1'=>SORT_ASC])->all(), 'idKategoriBarang2','namaKategoriBarang')) ?>

    <?= $form->field($model, 'hargaMin')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'hargaMax')->textInput(['type' => 'number']) ?>

    <?= 
        $form->field($model, 'id_prov')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Provinsi::find()->orderBy(['id_prov'=>SORT_ASC])->all(), 'id_prov','nama'),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih asal daerah penjual'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php // echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
