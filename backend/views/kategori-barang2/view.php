<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\KategoriBarang1;
use common\models\KategoriBarang2;
use common\models\KategoriBarang1Search;
use common\models\KategoriBarang2Search;

/* @var $this yii\web\View */
/* @var $model common\models\KategoriBarang2 */

$this->title = $model->idKategoriBarang2;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Barang2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-barang2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idKategoriBarang2], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idKategoriBarang2], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kategoriBarang1.namaKategoriBarang',
            'namaKategoriBarang',
        ],
    ]) ?>

</div>
