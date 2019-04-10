<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\News;
use yii\helpers\Url;

/* @var $this yii\web\View */

include_once("../../analyticstracking.php");

$this->title = 'MonzaMonza';

if (isset($_GET['Cari'])) {
    header("Location: http://www.monzamonza.com/frontend/web/index.php?r=product/index&ProductSearch[namaBarang]=" . $_GET['namaBarang']);
}
?>

<style type="text/css">
    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

    /* Carousel base class */
    /* .carousel {
        height: 500px;
        margin-bottom: 60px;
    } */

    /* Since positioning the image, we need to help out the caption */
    /* .carousel-caption {
        z-index: 10;
    } */

    /* Declare heights because of positioning of img element */
    /* .carousel .item {
        height: 500px;
        background-color: #777;
    } */

    /* .carousel-inner>.item>img {
        min-width: 100%;
        height: 500px;
    } */

    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (min-width: 768px) {

        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 20px;
            font-size: 21px;
            line-height: 1.4;
        }
    }
</style>

<!-- Masthead -->
<!--<header class="masthead text-white text-center">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">-->
<!--<h2 style='color:white;'><b>Mohon maaf sebesar-besarnya. Terjadi gangguan jaringan pada sistem kami :(<br>Mohon untuk menghubungi ulang CS kami apabila Anda pernah mengirim<br>email atau menelepon selama beberapa hari ini dengan CS monzamonza.com.<br>Terima kasih banyak dan dukung terus monzamonza.com :)</b></h2>-->
<!--<div class="col-xl-9">
				<h1 class="text-white">Cari barang murah / gratisan disini!</h1>
			</div>
			<div class="col-md-6 col-md-offset-3">-->
<!--<form action="#" method='GET'>-->
<!--<div class="form-row">
						<div class="col-12 col-md-9 mb-2 mb-md-0">-->
<!--<input type="text" class="form-control form-control-lg" placeholder="Cari barang murah..." name='namaBarang' id="namaBarang">-->
<!--</div>
						<div class="col-12 col-md-3">-->
<!--<input type="submit" class="btn btn-block btn-lg btn-primary" name='Cari' id='Cari' value='Cari'>-->
<!--<a href="http://monzamonza.com/frontend/web/index.php?r=product%2Findex&ProductSearch%5BidKategori%5D=0">
<button type="button" class="btn btn-block btn-lg btn-primary">Cari</button></a>-->
<!--</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</header>-->

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">

        <?php
        $newss = News::find()->where(['headline' => 'headline'])->all();
        $i = 0;
        $height = "<script>document.write(screen.height); </script>" . "px";


        foreach ($newss as $news) { ?>
            <?php
            echo "
            <div class='item'>
                <a href='" . Url::to(['news/view', 'id' => $news->idNews]) . "'>
                    <img src='../../common/file/news/" . $news->idNews . "_title.jpg' alt='$news->judul' class='d-block w-100'>
                </a>
            </div>
            ";
            ?>
        <?php
    }
    ?>

    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->

<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row" style="margin-top: 150px;">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <?= Html::a("<div class='features-icons-icon d-flex'>
						<i class='glyphicon glyphicon-shopping-cart'></i>
					</div>
					<h3>Jual Beli Barang</h3>
					<p class='lead mb-0' style='color:black;'>Punya barang tidak terpakai? Daripada menumpuk di rumah, lebih baik anda jual saja di Monza, bisa dapat uang tambahan dan rumah lebih bersih!</p>", ['product/index', 'ProductSearch[idKategori]' => 1]) ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <?= Html::a("<div class='features-icons-icon d-flex'>
						<i class='glyphicon glyphicon-gift'></i>
					</div>
					<h3>Giveaway</h3>
					<p class='lead mb-0' style='color:black;'>Ingin menyingkirkan barang yang tidak dipakai sembari mencari pahala? Kasih saja kepada yang lebih membutuhkan dengan Monza!</p>", ['product/index', 'ProductSearch[idKategori]' => 2]) ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <?= Html::a("<div class='features-icons-icon d-flex'>
						<i class='glyphicon glyphicon-time'></i>
					</div>
					<h3>Donasi</h3>
					<p class='lead mb-0' style='color:black;'>Mau berdonasi?? Cek yuk event donasi kami disini.</p>", ['news/index', 'NewsSearch[tipe]' => 'donasi']) ?>
                    <p class="lead mb-0">Mau membuat donasi kamu sendiri?? Hubungi kami di <a href="mailto:admin@monzamonza.com"><i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>admin@monzamonza.com</a> atau <a href="tel:+62877-7661-9168"><i class="fa d-inline mr-3 text-secondary fa-phone"></i>+62877 - 7661 - 9168</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Testimonials -->
<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5 testimoni-judul">Testimoni Pengguna</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="../../common/file/foto_haritz.jpg">
                    <h5>Haritz</h5>
                    <p class="font-weight-light mb-0">"Lebih mudah cari barang murah disini, terima kasih Monza!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="../../common/file/foto_latif.png">
                    <h5>Abdul Latif </h5>
                    <p class="font-weight-light mb-0">"Bersih-bersih rumah sambil berbagi, sukses terus Monza!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="../../common/file/foto_cindy.jpg">
                    <h5>Cindy</h5>
                    <p class="font-weight-light mb-0">"Berguna banget bagi yang punya barang menumpuk tak terpakai di rumah!"</p>
                </div>
            </div>
        </div>
    </div>
</section>
