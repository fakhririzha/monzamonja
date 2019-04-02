<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UserEdit */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'User Edits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-edit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit Profile', ['update'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Change Password', ['user-edit/change-password'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'email:email',
            'fullname',
            'address',
            'provinsi.nama',
            'kabupaten.nama',
            'kecamatan.nama',
            'kelurahan.nama',
            'nomorHandphone',
            'nomorRumah',
        ],
    ]) ?>

</div>
