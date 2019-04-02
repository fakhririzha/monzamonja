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
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'email:email',
            'active',
            'fullname',
            'address',
            'provinsi.nama',
            //'kabupaten.nama',
            //'kecamatan.nama',
            //'kelurahan.nama',
            'nomorHandphone',
            'nomorRumah',
            [
                'attribute' => 'Foto Profil',
                'format' => 'html',    
                "value" => function($model){
                    return ($model->foto) ? Html::img('../../common/file/userProfile/'. $model['foto'],
                ['width' => '150px']) : false;
                },
            ],
        ],
    ]) ?>

</div>
