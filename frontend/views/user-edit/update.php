<?php

use yii\helpers\Html;

include_once("../../analyticstracking.php");

/* @var $this yii\web\View */
/* @var $model common\models\UserEdit */

$this->title = 'Edit User Profile';
$this->params['breadcrumbs'][] = ['label' => 'User Edits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-edit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
