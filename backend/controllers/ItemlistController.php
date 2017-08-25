<?php

namespace backend\controllers;

use Yii;

use app\models\Items;
use app\models\Shops;
use app\models\ItemsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class ItemlistController extends Controller

{
    
    public function actionIndex()
    {
        $shops = Shops::find()->all();
        $items = Items::find()->all();
    
        return $this->render('index',[
            'shop' => $shops,
            'item' => $items ]

            );
        
    }

   
}
