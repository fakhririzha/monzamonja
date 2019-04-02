<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\KategoriBarang1 */

$this->title = 'Create Kategori Barang1';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Barang1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-barang1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
