<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Items */

$this->title = 'Create Items';
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    	'model' => $model,
    	 'shops' =>$shops,
        
    ])?>

</div>
