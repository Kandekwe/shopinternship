<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shops".
 *
 * @property int $Id
 * @property string $Tinnumber
 * @property string $Nameshop
 * @property string $Ownershop
 * @property string $Statusshop
 * @property string $Email
 * @property string $Phonenumber
 * @property string $Address
 * @property string $Datergst
 * @property string $Datermv
 */
class Shops extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shops';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tinnumber', 'Nameshop', 'Ownershop', 'Statusshop', 'Email', 'Phonenumber', 'Address', 'Datergst', 'Datermv'], 'required'],
            [['Tinnumber', 'Nameshop', 'Ownershop', 'Statusshop', 'Email', 'Phonenumber', 'Address', 'Datergst', 'Datermv'], 'string', 'max' => 255],
            [['Tinnumber'], 'unique'],
            [['Email'], 'unique'],
            [['Datergst'], 'unique'],
            [['Datermv'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Tinnumber' => 'Tinnumber',
            'Nameshop' => 'Nameshop',
            'Ownershop' => 'Ownershop',
            'Statusshop' => 'Statusshop',
            'Email' => 'Email',
            'Phonenumber' => 'Phonenumber',
            'Address' => 'Address',
            'Datergst' => 'Datergst',
            'Datermv' => 'Datermv',
        ];
    }
    public function getItems()
    {
        return Items::find()->where (['Idshop'=>$this ->Id]) ->all();

    }
}
