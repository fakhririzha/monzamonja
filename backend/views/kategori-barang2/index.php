<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\KategoriBarang1;
use common\models\KategoriBarang2;
use common\models\KategoriBarang1Search;
use common\models\KategoriBarang2Search;

/* @var $this yii\web\View */
/* @var $searchModel common\models\KategoriBarang2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Barang (Second Level)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-barang2-index">

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

    <p>
        <?= Html::a('Create Kategori Barang (First Level)', ['kategori-barang1/create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Kategori Barang (Second Level)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="alert alert-danger">
		<strong>Peringatan (Danger)!</strong> Jangan Pernah Membuat Sebuah Kategori apabila tidak yakin, karena penghapusan kategori dikemudian hari akan mempengaruhi produk yang telah diupload!!! (Never upload a new category, if you aren't sure. Because, delete it in the future, only cause error to the product that have been uploaded before.)
	</div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kategoriBarang1.namaKategoriBarang',
            'namaKategoriBarang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
