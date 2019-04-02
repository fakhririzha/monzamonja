<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductHistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-history-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Complete Search
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>  
                </div>
            </div>
        </div>
      
    </div>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'date',
            'action',
            'kategori.namaKategori',
            'status',
            'user.username',
            'namaBarang',
            'deskripsi',
            'harga',
            [
                'attribute' => 'image',
                'format' => 'html',    
                "value" => function($model){
                    return ($model->foto) ? Html::img('../../common/file/product/'. $model['foto'],
                ['width' => '150px']) : false;
                },
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view}',
            ],
        ],
    ]); ?>
</div>
