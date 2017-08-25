<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Items;

/**
 * ItemsSearch represents the model behind the search form of `app\models\Items`.
 */
class ItemsSearch extends Items
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Iditem', 'itemname', 'itemprice', 'Idshop'], 'integer'],
            [['expdate', 'qty', 'barcode', 'image', 'category', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Items::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Iditem' => $this->Iditem,
            'itemname' => $this->itemname,
            'itemprice' => $this->itemprice,
            'Idshop' => $this->Idshop,
        ]);

        $query->andFilterWhere(['like', 'expdate', $this->expdate])
            ->andFilterWhere(['like', 'qty', $this->qty])
            ->andFilterWhere(['like', 'barcode', $this->barcode])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
