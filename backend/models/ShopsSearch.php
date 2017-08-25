<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shops;

/**
 * ShopsSearch represents the model behind the search form of `app\models\Shops`.
 */
class ShopsSearch extends Shops
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id'], 'integer'],
            [['Tinnumber', 'Nameshop', 'Ownershop', 'Statusshop', 'Email', 'Phonenumber', 'Address', 'Datergst', 'Datermv'], 'safe'],
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
        $query = Shops::find();

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
            'Id' => $this->Id,
        ]);

        $query->andFilterWhere(['like', 'Tinnumber', $this->Tinnumber])
            ->andFilterWhere(['like', 'Nameshop', $this->Nameshop])
            ->andFilterWhere(['like', 'Ownershop', $this->Ownershop])
            ->andFilterWhere(['like', 'Statusshop', $this->Statusshop])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Phonenumber', $this->Phonenumber])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Datergst', $this->Datergst])
            ->andFilterWhere(['like', 'Datermv', $this->Datermv]);

        return $dataProvider;
    }
}
