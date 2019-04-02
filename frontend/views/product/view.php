<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Product */

include_once("../../analyticstracking.php");

$this->title = $model->namaBarang;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
            $idUser = Yii::$app->user->identity->id;

            if($idUser == $model->idUser)
            {
        ?>

        <?= Html::a('Update', ['update', 'id' => $model->idProduct], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idProduct], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

        <?php
            }
        ?>
    </p>
    <header>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'namaBarang',
            'date',
            'kategori.namaKategori',
            'kategoriBarang2.namaKategoriBarang',
            'user.provinsi.nama',
            'user.nomorHandphone',
            'deskripsi:ntext',
            'sudahLaku',
            'harga',
            [
                'attribute' => 'image',
                'format' => 'html',    
                "value" => function($model){
                    return ($model->foto) ? Html::img('../../common/file/product/'. $model['foto'],
                ['width' => '150px']) : false;
                },
            ],
        ],
    ]) ?>
    </header>

</div>
