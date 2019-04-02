<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">
    <!-- Page Content -->
    <div class="container">

	    <div class="row">

		        <!-- Post Content Column -->
		    <div class="col-lg-12">

		        <!-- Title -->
		        <header><h1 class="mt-4"><?=$model->judul;?></h1></header>

		        <!-- Author -->
		        <p class="lead">
		            by <a href="mailto:admin@monzamonza.com" m="1">admin@monzamonza.com</a>
		        </p>

		        <hr>

		        <!-- Date/Time -->
		        <p>Posted on <?=$model->date;?></p>

		        <hr>

		        <!-- Preview Image -->
		        <img class="img-fluid rounded" style='height:auto; width:90%' src="http://www.monzamonza.com/common/file/news/<?= $model->idNews; ?>_title.jpg" alt="<?= $model->judul; ?>">

		        <hr>

                <header>
		        <!-- Post Content -->
		        <?=$model->isi;?>
                </header>

		        <hr>
		    </div> 
		</div>
	</div>
</div>
