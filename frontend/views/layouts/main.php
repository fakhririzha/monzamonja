<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\Kategori;
use common\models\KategoriBarang1;
use common\models\KategoriBarang2;
use common\models\User;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="monzamonza.com tempat dimana anda mengubah barang bekas menjadi uang dan pahala. jual beli barang bekas paling murah se Indonesia. Monza merupakan bahasa slang yang berasal dari kota Medan, dengan makna barang bekas. Monza awalnya merupakan singkatan dari monginsidi plaza tempat dimana pedagang kaki lima menjajakan lapak produk fashion dan rumah tangga bekas. terdiri dari baju, seprai, celana, jas, rok, kemeja, kaos, gorden, pakaian dalam, topi, jaket, sepatu, bra, piyama, dan berbagai produk lain. Akhirnya walau penjualan berang bekas bukan hanya lagi di jalan mongonsidi, monza tetap diartikan sebagai jual-beli barang bekas.">
    <meta name="keywords" content="monza, murah, monzamonza, monzamonza.com, medan, monza medan, medan monza, indonesia, brang bekas, aplikasi jual beli online, belanja barang bekas online terpercaya, barang bekas, barang murah, belanja, belanja online, belanja online terpercaya, beli online, berniaga, jual barang bekas, jual barang bekas online, jual beli, jual beli barang, jual beli barang bekas, jual beli barang bekas online, jual beli hp bekas, jual beli mobil, jual beli mobil bekas, jual beli motor, jual beli motor bekas, jual beli online, jual beli rumah, jual mobil, jual motor, jual rumah, jual rumah murah, jual tanah, jualan online, monza, monza f1 2016, monzamonza, online shop terpercaya, pasang iklan gratis, perumahan murah, properti, rumah, rumah dijual, rumah dijual murah, rumah murah, rumah sewa, rumah sewa murah, rumah untuk dijual, situs belanja online, situs belanja online terpercaya, situs jual beli, situs jual beli online, situs jual beli online terpercaya, tanah dijual, toko bagus, toko online, toko online terpercaya, Keyword Stats 2018-05-15 at 13_31_30, March 24, 2018 - April 30, 2018, Keyword, monza, jual beli online, jual beli mobil, toko online, toko online terpercaya, jual beli motor, berniaga, jualan online, beli online, properti, mobil seken, monza f1 2016, online shop terpercaya, jual motor, monza hotel, monza f1, monza italy, jual beli hp online, jual, over kredit rumah, beli barang online, jual beli on line, f1 monza, beli rumah, monza circuit, jual hp online, hp seken, monza car, toko jual beli online, monza italia, jual beli hp second, jual beli elektronik, website belanja online, beli mobil, website jual beli online, monza hotels, monza gp, jual beli online hp, recaro monza, monza race track, recaro monza nova, website jual beli, cara jualan online, barang second, cari hp, perumahan baru, monza f1 tickets, situs toko online, toko bekas online, website jualan online, cari hp bekas, barang online, toko online bekas, jual beli website, monza track, toko online elektronik, kredit mobil bekas, website jual beli rumah, tag monza, tag heuer monza, cari hp murah, hotel monza, jualan online shop, beli tanah, monzas, beli mobil bekas, harga mobil toyota rush, beli hp, jual beli online gratis, harga mobil remote control, grand prix monza, cara jual beli online, monza f1 track, mobil pick up bekas, jual beli mobil bekas jakarta, barang barang online, website penjualan online, tape mobil, hp second murah, bursa mobil, harga mobil toyota yaris, daftar toko online, beli website, belanja online shop, hotel helios, harga mobil yaris, toko hp, berniaga hp, hotels in monza italy, harga mobil mazda 2, harga mobil freed, hp android murah, monza f1 circuit, helios hotel, monza f1 2017, f1 monza 2017, belanja hp online, beli hp online, harga hp second, motel monza, online jual beli, toko shopee online, bursa hp, harga mobil sedan, tv mobil, website jualan, as hotel monza, honda jazz, mobil dijual, suzuki pick up, web jualan online, jual hp second, mobil oper kredit, toko online shopee, monza mb, harga mobil kia, monza italy f1, hp android termurah, monza monza, cari hp second, suzuki mobil, beli toko online, suzuki splash, fi monza, f1 2016 monza, toko hp murah, app jual beli, harga mobil ford, jual beli second, hp android, monza race, hp baru, formula 1 monza, cari hp second murah, italian grand prix circuit, hp oppo, forum jual beli hp, hp asus, toko online yang terpercaya, monza auto, jual toko online, jual beli online motor, bursa hp bekas, helios hotel monza, rumah online, monza race circuit, hp black market, italian gp, jual website, great corolla, monza gp 2016, monza formula 1, website rumah, monza italy race track, jual barang second branded, hp cina murah, harga hp nokia, elektronik bekas, beli hp bekas, jual second, corolla twincam, saham, monza street, hotel elios, belanja online gratis, hp evercoss, formula 1 monza tickets, hotel helios monza, jual beli online shopee, toko online elektronik terpercaya, hp nokia murah, monza grand prix circuit, beli elektronik online, website jual beli mobil bekas, hp cina, jual hp nokia, hp second, di jual, monza city, circuit monza, hp nokia, hp indonesia, formula 1 italy, pizza monza, bosmobil, mudah cari, toko hp bekas, harga mobil kuda, monza autodrome, barang second branded, hp cdma murah">
    <meta name="author" content="Cindy Aprilia - admin@monzamonza.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>
    <title>monzamonza.com - <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
          //'brandLabel' => Yii::$app->name,
          'brandLabel' => '<img src="../../common/file/logo_horizontal_white.png" style="width:auto;height:150%;"/>',
          'brandUrl' => Yii::$app->homeUrl,
          'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
          ],
        ]);
        $menuItems = [
          ['label' => 'Home', 'url' => ['/site/index']],
          //['label' => 'About', 'url' => ['/site/about']],
          //['label' => 'Contact', 'url' => ['/site/contact']],
        ];


        $kategoris = Kategori::find()->all();
        foreach ($kategoris as $kategori) {
          //$menuItems[] = array('label' => $kategori->namaKategori, 'url' => ['product/index','idKategori'=>$kategori->idKategori]);
          $items[] = array('label' => $kategori->namaKategori, 'url' => ['product/index', 'ProductSearch[idKategori]' => $kategori->idKategori]);
        }

        $items[] = array('label' => 'Donasi', 'url' => ['news/index', 'NewsSearch[tipe]' => 'donasi']);
        $items[] = array('label' => 'News', 'url' => ['news/index', 'NewsSearch[tipe]' => 'pengumuman']);
        $items[] = array('label' => 'About', 'url' => ['site/about']);
        $items[] = array('label' => 'Terms and Condition', 'url' => ['site/uploadtermsandagreement']);

        $menuItems[] =
          [
            'label' => 'MonzaMonza',
            'items' => $items,
          ];

        $kategoriBarang2s = KategoriBarang2::find()->orderBy(['idKategoriBarang1' => SORT_ASC])->all();
        foreach ($kategoriBarang2s as $kategoriBarang2) {
          // $categoriesItems[] = array('label' => $kategoriBarang2->kategoriBarang1->namaKategoriBarang . ' - ' . $kategoriBarang2->namaKategoriBarang, 'url' => ['product/index', 'ProductSearch[idKategoriBarang2]' => $kategoriBarang2->idKategoriBarang2]);
          $categoriesItems[] = array('label' => $kategoriBarang2->kategoriBarang1->namaKategoriBarang, 'url' => ['product/index', 'ProductSearch[idKategoriBarang2]' => $kategoriBarang2->idKategoriBarang2]);
        }

        $menuItems[] =
          [
            'label' => 'Kategori',
            'items' => $categoriesItems,
          ];


        if (Yii::$app->user->isGuest) {
          $menuItems[] = ['label' => 'Daftar', 'url' => ['/site/signup']];
          $menuItems[] = ['label' => 'Masuk', 'url' => ['/site/login']];
        } else {
          $menuItems[] = ['label' => 'Barang Saya', 'url' => ['/product/mine']];
          $menuItems[] = '<li>'
            . Html::beginForm(['/user-edit/view'])
            . Html::submitButton(
              'Ubah Profil' . Yii::$app->user->identity->username,
              ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
          $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
              //'Logout (' . Yii::$app->user->identity->username . ')',
              'Keluar (Logout)',
              ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
        }
        echo Nav::widget([
          'options' => ['class' => 'navbar-nav navbar-right'],
          'items' => $menuItems,
        ]);
        NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <!--<div class="py-5 text-white bg-primary text-center">
    <div class="container">
      <div class="row" style="margin-bottom: 50px;">
        <div class="col-md-12">
          <h1>Newsletter subscription</h1>
          <p class="lead mb-4">Monthly updates to be always at the top</p>
          <form class="form-inline justify-content-center">
            <div class="input-group my-1">
              <input type="text" class="form-control mr-3 my-1" placeholder="Your mail" id="inlineFormInputGroup"> </div>
            <button type="submit" class="btn btn-secondary">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </div>-->
    <div class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="p-4 col-md-4">
                    <h2 class="mb-4 text-secondary">Monza</h2>
                    <p class="text-white">Membantu anda mengurangi barang bekas yang tidak terpakai dan menjadikannya rezeki + pahala</p>
                </div>
                <div class="p-4 col-md-4">
                    <h2 class="mb-4 text-secondary">Mapsite</h2>
                    <ul class="list-unstyled text-white">
                        <?= Html::a("Jual Beli", ['product/index', 'ProductSearch[idKategori]' => 1]) ?>
                        <br>
                        <?= Html::a("Giveaway", ['product/index', 'ProductSearch[idKategori]' => 2]) ?>
                        <br>
                        <?= Html::a("Donasi", ['news/index', 'NewsSearch[tipe]' => 'donasi']) ?>
                        <br>
                    </ul>
                </div>
                <div class="p-4 col-md-4">
                    <h2 class="mb-4">Contact</h2>
                    <p>
                        <a href="tel:+6287776619168" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-phone"></i>+62877 - 7661 - 9168</a>
                    </p>
                    <p>
                        <a href="mailto:admin@monzamonza.com" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>admin@monzamonza.com</a>
                    </p>
                    <p>
                        <a href="https://goo.gl/maps/vbchnSfSVoK2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>365 Medan, Indonesia</a>
                    </p>
                </div>
                <!--<div class="p-4 col-md-3">
          <h2 class="mb-4 text-light">Subscribe</h2>
          <form>
            <fieldset class="form-group text-white"> <label for="exampleInputEmail1">Get our newsletter</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> </fieldset>
            <button type="submit" class="btn btn-outline-secondary">Submit</button>
          </form>
        </div>-->
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <p class="text-center text-white">� Copyright 2017 Monja - All rights reserved. </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!--
<footer class="footer">
  <div class="container">
    <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

    <p class="pull-right"><?= Yii::powered() ?></p>
  </div>
</footer>
-->
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?> 
