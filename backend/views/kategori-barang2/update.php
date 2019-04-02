<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\KategoriBarang2 */

$this->title = 'Update Kategori Barang2: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Barang2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idKategoriBarang2, 'url' => ['view', 'id' => $model->idKategoriBarang2]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-barang2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
