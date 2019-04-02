<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\KategoriBarang1;

/**
 * KategoriBarang1Search represents the model behind the search form of `common\models\KategoriBarang1`.
 */
class KategoriBarang1Search extends KategoriBarang1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idKategoriBarang1'], 'integer'],
            [['namaKategoriBarang'], 'safe'],
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
        $query = KategoriBarang1::find();

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
            'idKategoriBarang1' => $this->idKategoriBarang1,
        ]);

        $query->andFilterWhere(['like', 'namaKategoriBarang', $this->namaKategoriBarang]);

        return $dataProvider;
    }
}
