<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shops */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shops-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tinnumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nameshop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ownershop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Statusshop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Phonenumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Datergst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Datermv')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
