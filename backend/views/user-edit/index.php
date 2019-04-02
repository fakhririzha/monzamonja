<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserEditSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Edits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-edit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Complete Search
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>  
                </div>
            </div>
        </div>
      
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            //'status',
            //'created_at',
            //'updated_at',
            'fullname',
            //'address',
            //'id_prov',
            //'id_kab',
            //'id_kec',
            //'id_kel',
            'nomorHandphone',
            //'nomorRumah',
            'active',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view}{update}',
            ],
        ],
    ]); ?>
</div>
