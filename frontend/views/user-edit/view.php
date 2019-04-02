<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

include_once("../../analyticstracking.php");

/* @var $this yii\web\View */
/* @var $model common\models\UserEdit */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'User Edits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-edit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah Data Diri (Edit Profile)', ['update'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Ubah Sandi (Change Password)', ['user-edit/change-password'], ['class' => 'btn btn-danger']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'Foto Profil',
                'format' => 'html',    
                "value" => function($model){
                    return ($model->foto) ? Html::img('../../common/file/userProfile/'. $model['foto'],
                ['width' => '150px']) : false;
                },
            ],
            'username',
            'email:email',
            'fullname',
            'address',
            'provinsi.nama',
            //'kabupaten.nama',
            //'kecamatan.nama',
            //'kelurahan.nama',
            'nomorHandphone',
            'nomorRumah',
        ],
    ]) ?>

</div>
