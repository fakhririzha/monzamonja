<?php
use yii\helpers\Html;
?>  

<div class='col-md-3'>
<div class='card'>
    <div class='box'>
        <div class='content'>
            <img class='card-img-top' src='../../common/file/product/<?=$model->foto;?>' alt='<?=$model->namaBarang;?> murah banget di monzamonza.com'	>
            <div style='text-align: left; padding:5%; '>
                <small class='card-subtitle text-muted'>
                	<?php
                		if ($model->idKategori == 2)
	            		{
	            			echo "Gratis (Giveaway)";
	            		}
	            		else
	            		{
	            			echo $model->kategori->namaKategori;
	            		}
                	?>
                </small>
	            <p class='card-subtitle text-muted'><b>
	            	<?php
	            		if (strlen($model->namaBarang) <= 12)
	            		{
	            			echo $model->namaBarang;
	            		}
	            		else
	            		{
	            			echo substr($model->namaBarang,0,11)."...";
	            		}
	            	?>
	            </b></p>
            <p class='card-text p-y-1'>Rp. <?=$model->harga;?></p>
            </div>
			<div class="card-footer">
				<?= Html::a("Lihat Selengkapnya", ['product/view', 'id' => $model->idProduct], ['class'=>'btn btn-warning']) ?>
			</div>
        </div>
    </div>
</div>
</div>
