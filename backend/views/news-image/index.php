<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsImageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-image-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Back to News', ['news/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idNewsImage',
            'news.judul',
            //'dateNewsImage',
            'image',
            [
                'attribute' => 'image',
                'format' => 'html',    
                "value" => function($model){
                    return ($model->image) ? Html::img('../../common/file/news/'. $model['image'],
                ['width' => '150px']) : false;
                },
            ],

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
