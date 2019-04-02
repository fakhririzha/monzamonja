<?php
use yii\helpers\Html;
?>  

<div class='col-md-3'>
<div class='card'>
    <div class='box'>
        <div class='content'>
            <div class='thumbnail'><img class='img' src='../../common/file/product/<?=$model->foto;?>' alt='<?=$model->namaBarang;?> murah banget di monzamonza.com'></div>
            <div  style='text-align: center; padding:auto; '>
                <?= Html::a("Lihat Selengkapnya", ['product/view', 'id' => $model->idProduct], ['class'=>'btn btn-warning']) ?>
            </div><br>
            <div  style='text-align: left; padding:5%; '>
                <h5 class='card-subtitle text-muted'>
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
                </h5>
	            <h3 class='card-subtitle text-muted'><b>
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
	            </b></h3>
            <h4><p class='card-text p-y-1'>Rp.<?=$model->harga;?></p></h4> 
            </div><br>
        </div>
    </div>
</div>
</div>
