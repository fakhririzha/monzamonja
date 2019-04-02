<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\KategoriBarang2 */

$this->title = 'Create Kategori Barang2';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Barang2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-barang2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
