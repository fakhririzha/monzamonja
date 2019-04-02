<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NewsImage */

$this->title = 'Update News Image: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'News Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idNewsImage, 'url' => ['view', 'id' => $model->idNewsImage]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="news-image-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
