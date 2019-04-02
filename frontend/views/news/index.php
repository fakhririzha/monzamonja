<style type="text/css">
    .card-text img{
        width: 0; height: 0;
    }

    /*.col-md-12{
        border-top: 1px solid #808080;
        padding-top: 2%;
        padding-bottom: 2%;

    }*/

    .card{
        padding-top: 2%;
        padding-bottom: 2%;
    }
</style>
<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">
	<header>

    <h1 class="my-4"><small>MonzaMonza.com</small> <?= Html::encode($this->title) ?></h1>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-warning">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h4><b>Pusing Cari Berita Terlalu Banyak? Untuk Filter Pencarian Klik Disini >>><br>(Do You Want to Filter News? Click Here) >>></b></h4>
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

	</header>

    <div class="container">
            <?php 
                echo ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'itemView' => '_itemIndex',
                'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
            ]);
            ?>
    </div>
</div>
