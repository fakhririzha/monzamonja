<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">

        <!-- Title -->
        <h1 class="mt-4"><?=$model->judul;?></h1>

        <!-- Author -->
        <p class="lead">
            by <a href="mailto:admin@monzamonza.com" m="1">admin@monzamonza.com</a>
        </p>

        <p>
            <?= Html::a('Input Image', ['news-image/create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Update', ['update', 'id' => $model->idNews], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->idNews], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?=$model->date;?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="../../common/file/news/<?=$model->idNews;?>.jpg" alt="">

        <hr>

        <!-- Post Content -->
        <?=$model->isi;?>

        <hr>

    </div> 

</div>
