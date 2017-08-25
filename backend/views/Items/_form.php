<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
use backend\models\Shops;

/* @var $this yii\web\View */
   use app\models\Items; /*
/* @var $form yii\widgets\ActiveForm */
?>

<div class="items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'itemname')->textInput() ?>
    
    <?= $form->field($model, 'itemprice')->textInput() ?>

    <?= $form->field($model, 'expdate')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'en',
    'dateFormat' => 'yyyy-MM-dd',
])?>

    <?= $form->field($model, 'qty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'barcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Idshop')->dropDownList(
        ArrayHelper::map($shops,'Id','Nameshop'))?>

    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
