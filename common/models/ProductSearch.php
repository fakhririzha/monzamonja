<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Product;
use common\models\Kabupaten;
use common\models\UserEdit;

/**
 * ProductSearch represents the model behind the search form of `common\models\Product`.
 */
class ProductSearch extends Product
{
    public $hargaMin;
    public $hargaMax;
    public $id_prov;
    public $provinsi;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idProduct', 'idUser', 'idKategori', 'harga', 'hargaMax', 'hargaMin', 'idKategoriBarang2'], 'integer'],
            [['namaBarang', 'deskripsi', 'date', 'foto', 'hargaMax', 'hargaMin', 'id_prov', 'idKategoriBarang2', 'sudahLaku'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'idProduct' => 'Id Product',
            'idUser' => 'User',
            'namaBarang' => 'Nama Barang',
            'deskripsi' => 'Deskripsi',
            'idKategori' => 'Dijual atau Giveaway?',
            'kategori.namaKategori' => 'Dijual atau Giveaway?',
            'harga' => 'Harga',
            'status' => 'Status',
            'foto' => 'Foto',
            'file' => 'Foto',
            'kategori.namaKategori' => 'Kategori',
            'user.nomorHandphone' => 'Kontak Penjual',
            'id_prov' => 'Provinsi',
            'hargaMax' => 'Maximal Harga',
            'hargaMin' => 'Minimal Harga',
            'idUser' => 'Daerah Produk'
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
        $query = Product::find()->joinWith('user');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['idProduct'=>SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        if($this->idKategori == 0)
        {
            unset($this->idKategori);
        }

        if($this->id_prov != 0)
        {
            $provinsi = $this->id_prov;
        }
        else if($this->id_prov == 0)
        {
            $provinsi = NULL;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idProduct' => $this->idProduct,
            'idUser' => $this->idUser,
            'idKategori' => $this->idKategori,
            'date' => $this->date,
            //'harga' => $this->harga,
            'product.status' => 'active',
            'sudahLaku' => 'belum laku',
            'user.id_prov' => $provinsi,
            'idKategoriBarang2' => $this->idKategoriBarang2,
        ]);

        $query->andFilterWhere(['like', 'namaBarang', $this->namaBarang])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['>=', 'harga', $this->hargaMin])
            ->andFilterWhere(['<=', 'harga', $this->hargaMax]);
            //->andFilterWhere(['like', 'provinsi.user.nama', $this->id_prov]);

        return $dataProvider;
    }

    public function getUser()
    {
        return $this->hasOne(UserEdit::className(), ['id' => 'idUser']);
    }

    public function getProvinsi()
    {
        return $this->hasOne(Kabupaten::className(), ['id_prov' => 'id_prov']);
    }
}
