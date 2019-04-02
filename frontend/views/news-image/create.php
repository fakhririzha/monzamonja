<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\NewsImage */

$this->title = 'Create News Image';
$this->params['breadcrumbs'][] = ['label' => 'News Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-image-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
