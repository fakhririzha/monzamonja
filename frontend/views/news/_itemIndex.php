<?php
use yii\helpers\Html;
?>  


		<!-- Blog Entries Column -->
		<div class="col-md-12">

			<!-- Blog Post -->
			<div class="card mb-12" style='border-bottom: 1px solid black;padding: 3%;'>
			<img class="card-img-top" style="width: 100%; height: 100%" src="../../common/file/news/<?= $model->idNews; ?>_title.jpg" alt="<?= $model->judul; ?>">
			<div class="card-body">
				<h2 class="card-title"><?= $model->judul; ?></h2>
				<p class="card-text">
					<?php
						if (strlen($model->isi) <= 300)
	            		{
	            			echo $model->isi;
	            		}
	            		else
	            		{
	            			echo substr($model->isi,0,300)."...";
	            		}
					?>
				</p>
				<?= Html::a("Lihat Selengkapnya →", ['news/view', 'id' => $model->idNews], ['class'=>'btn btn-primary']) ?>
			</div>
			<div class="card-footer text-muted">
				Posted on <?= $model->date; ?> by
				<a href="mailto:admin@monzamonza.com" m="1">admin@monzamonza.com</a>
			</div>
			</div>

		</div>