<?php

use app\models\Government;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Governments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="government-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a('Create Government', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ministry',
            'department',
            'sub_category',
            'organizational_location',
            //'giz_interventions_history:ntext',
            //'focal_person_contact_details:ntext',
            //'physical_address:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Government $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
