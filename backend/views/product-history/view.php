<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductHistory */

$this->title = $model->namaBarang;
$this->params['breadcrumbs'][] = ['label' => 'Product Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-history-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'namaBarang',
            'action',
            'actionDate',
            'user.username',
            'status',
            'user.nomorHandphone',
            'deskripsi',
            'kategori.namaKategori',
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

</div>
