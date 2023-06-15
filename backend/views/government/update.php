<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Government $model */

$this->title = 'Update Government: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Governments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="government-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
