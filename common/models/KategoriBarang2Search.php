<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\KategoriBarang2;

/**
 * KategoriBarang2Search represents the model behind the search form of `common\models\KategoriBarang2`.
 */
class KategoriBarang2Search extends KategoriBarang2
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idKategoriBarang2', 'idKategoriBarang1'], 'integer'],
            [['namaKategoriBarang'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'namaKategoriBarang' => 'Kategori Barang (Second Level)',
            'idKategoriBarang1' => 'Kategori Barang (First Level)',
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
        $query = KategoriBarang2::find();

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

        if($this->idKategoriBarang1 == 0)
        {
            unset($this->idKategoriBarang1);
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idKategoriBarang2' => $this->idKategoriBarang2,
            'idKategoriBarang1' => $this->idKategoriBarang1,
        ]);

        $query->andFilterWhere(['like', 'namaKategoriBarang', $this->namaKategoriBarang]);

        return $dataProvider;
    }
}
