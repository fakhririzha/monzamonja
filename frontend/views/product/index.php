<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<style>
	.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem; }

.card-body {
  flex: 1 1 auto;
  padding: 1.25rem; }

.card-title {
  margin-bottom: 0.75rem; }

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.25rem; }

.card > .list-group:first-child .list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem; }

.card > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
  .card-header:first-child {
	border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125); }
  .card-footer:last-child {
	border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

/*img{
	width: 100%;
	height: 70%;
}

img:after {
  content: "";
  display: block;
  padding-bottom: 100%;
}*/

.thumbnail {
  position: relative;
  /*width: 100%;
  height: 20vw;*/
  width: 100%;
  height: 200px;
  overflow: hidden;
}
.thumbnail img {
  position: absolute;
  left: 50%;
  top: 50%;
  height: 100%;
  width: auto;
  -webkit-transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
          transform: translate(-50%,-50%);
}
.thumbnail img.portrait {
  width: 100%;
  height: auto;
}


.thislinklink{
	padding: 1.25rem;
}

.box:before{
	content: "";
	display: block;
	/*padding-top: 100%;*/  /* initial ratio of 1:1*/
}
.content{
	top: 0;
	left: 0;
	right: 0;
	/*bottom: 0;*/
}
.ratio2_1:before{
	padding-top: 50%;
}
.ratio1_2:before{
	padding-top: 200%;
}
.ratio4_3:before{
	padding-top: 75%;
}
.ratio16_9:before{
	padding-top: 56.25%;
}


.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px); }

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px); }

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px); }

.card-deck {
  display: flex;
  flex-direction: column; }
  .card-deck .card {
	margin-bottom: 15px; }
  @media (min-width: 576px) {
	.card-deck {
	  flex-flow: row wrap;
	  margin-right: -15px;
	  margin-left: -15px; }
	  .card-deck .card {
		display: flex;
		flex: 1 0 0%;
		flex-direction: column;
		margin-right: 15px;
		margin-bottom: 0;
		margin-left: 15px; } }

.card-group {
  display: flex;
  flex-direction: column; }
  .card-group .card {
	margin-bottom: 15px; }
  @media (min-width: 576px) {
	.card-group {
	  flex-flow: row wrap; }
	  .card-group .card {
		flex: 1 0 0%; }
		.card-group .card + .card {
		  margin-bottom: 0;
		  margin-left: 0;
		  border-left: 0; }
		.card-group .card:first-child {
		  border-top-right-radius: 0;
		  border-bottom-right-radius: 0; }
		  .card-group .card:first-child .card-img-top {
			border-top-right-radius: 0; }
		  .card-group .card:first-child .card-img-bottom {
			border-bottom-right-radius: 0; }
		.card-group .card:last-child {
		  border-top-left-radius: 0;
		  border-bottom-left-radius: 0; }
		  .card-group .card:last-child .card-img-top {
			border-top-left-radius: 0; }
		  .card-group .card:last-child .card-img-bottom {
			border-bottom-left-radius: 0; }
		.card-group .card:not(:first-child):not(:last-child) {
		  border-radius: 0; }
		  .card-group .card:not(:first-child):not(:last-child) .card-img-top,
		  .card-group .card:not(:first-child):not(:last-child) .card-img-bottom {
			border-radius: 0; } }

.card-columns .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-columns {
	column-count: 3;
	column-gap: 1.25rem; }
	.card-columns .card {
	  display: inline-block;
	  width: 100%; } }

.col-md-6 {
	flex: 0 0 50%;
	max-width: 50%;
	position: relative;
	width: 100%;	
	min-height: 1px;	
	padding-right: 15px;
	padding-left: 15px; }

@media (min-width: 576px) {
  .col-sm-6 {
	flex: 0 0 50%;
	max-width: 50%; } }
</style>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

include_once("../../analyticstracking.php");

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-warning">
				<div class="panel-heading" role="tab" id="headingTwo">
					<h4 class="panel-title">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<button class="btn btn-primary">Filter Pencarian</button>
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
	</p>

	<?php /* GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'idProduct',
			'idUser',
			'namaBarang',
			'deskripsi',
			'idKategori',
			//'harga',
			//'foto',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); */ ?>

	<div class="py-5 bg-light text-dark">
		<div class="container-fluid">
			<?php 
				echo ListView::widget([
			   'dataProvider' => $dataProvider,
			   'itemOptions' => ['class' => 'item'],
				'itemView' => '_item',
			   'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
		  ]);
		  ?>
		</div>  
	</div>
	<br>
</div>
