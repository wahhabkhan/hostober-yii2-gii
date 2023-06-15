<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Government $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="government-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ministry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organizational_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'giz_interventions_history')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'focal_person_contact_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'physical_address')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
