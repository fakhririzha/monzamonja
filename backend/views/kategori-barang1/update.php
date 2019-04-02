<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\KategoriBarang1 */

$this->title = 'Update Kategori Barang1: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Barang1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idKategoriBarang1, 'url' => ['view', 'id' => $model->idKategoriBarang1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-barang1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
