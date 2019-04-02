<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Monza';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Edit User</h2>

                <p>Tempat mengedit dan membanned user</p>
                <p>
                    <?= Html::a('User', ['user-edit/index'], ['class'=>'btn btn-default']) ?>
                </p><br><br>
                <h2>News</h2>

                <p>Tempat membuat berita atau notifikasi baru</p>
                <p>
                    <?= Html::a('News', ['news/index'], ['class'=>'btn btn-default']) ?>
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Product</h2>

                <p>Tempat mengedit product</p>
                <p>
                    <?= Html::a('Product', ['product/index'], ['class'=>'btn btn-default']) ?>
                </p>

                <p>History pen-delete-an product</p>
                <p>
                    <?= Html::a('Product History', ['product-history/index'], ['class'=>'btn btn-default']) ?>
                </p>

                <p>Kategori Barang</p>
                <p>
                    <?= Html::a('Categories', ['kategori-barang2/index'], ['class'=>'btn btn-default']) ?>
                </p>

                <p>Kategori Barang (Level 1)</p>
                <p>Jangan Dibuka Bila Tidak Perlu, Hanya untuk melakukan perbaikan pada kesalahan nama di kategori level 1</p>
                <p>
                    <?= Html::a('Categories Level 1', ['kategori-barang1/index'], ['class'=>'btn btn-danger']) ?>
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Edit profile admin</h2>

                <p>Tempat mengedit profile admin</p>
                <p>
                    <?= Html::a('Edit Profile', ['user-edit/view', 'id' => 1], ['class'=>'btn btn-default']) ?>
                </p>

                <p>Tempat mengubah password</p>
                <p>
                    <?= Html::a('Edit Password', ['user-edit/change-password'], ['class'=>'btn btn-default']) ?>
                </p>
            </div>
        </div>

    </div>
</div>
