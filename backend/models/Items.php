<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property int $Iditem
 * @property int $itemname
 * @property int $itemprice
 * @property string $expdate
 * @property string $qty
 * @property string $barcode
 * @property string $image
 * @property string $category
 * @property string $status
 * @property int $Idshop
 *
 * @property Shops $shop
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itemname'], 'required'],
            [['itemname', 'itemprice', 'Idshop'], 'integer'],
            [['expdate', 'qty', 'barcode', 'image', 'category', 'status'], 'string', 'max' => 255],
            [['Idshop'], 'exist', 'skipOnError' => true, 'targetClass' => Shops::className(), 'targetAttribute' => ['Idshop' => 'Id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Iditem' => 'Iditem',
            'itemname' => 'Itemname',
            'itemprice' => 'Itemprice',
            'expdate' => 'Expdate',
            'qty' => 'Qty',
            'barcode' => 'Barcode',
            'image' => 'Image',
            'category' => 'Category',
            'status' => 'Status',
            'Idshop' => 'Idshop',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShop()
    {
        return $this->hasOne(Shops::className(), ['Id' => 'Idshop']);
    }
}
