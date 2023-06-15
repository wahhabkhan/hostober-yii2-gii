<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Government $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Governments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="government-view">

<h1><?=Html::encode($this->title)?></h1>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Ministry</th>
        <th>Department</th>
        <th>Sub Category</th>
        <th>Organizational Location</th>
        <th>GIZ Interventions History</th>
        <th>Focal Person Contact Details</th>
        <th>Physical Address</th>
        <th>Action</th>
    </tr>
    <tr>
        <td><?=$model->id?></td>
        <td><?=$model->ministry?></td>
        <td><?=$model->department?></td>
        <td><?=$model->sub_category?></td>
        <td><?=$model->organizational_location?></td>
        <td><?=$model->giz_interventions_history?></td>
        <td><?=$model->focal_person_contact_details?></td>
        <td><?=$model->physical_address?></td>
        <td>
                <div class="btn-group" role="group">
                    <?=Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn rounded btn-primary'])?>
                    <?=Html::a('Delete', ['delete', 'id' => $model->id], [
    'class' => 'btn rounded btn-danger ms-1',
    'data' => [
        'confirm' => 'Are you sure you want to delete this item?',
        'method' => 'post',
    ],
])?>
                </div>
            </td>
    </tr>
</table>

</div>
