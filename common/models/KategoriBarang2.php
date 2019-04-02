<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kategoriBarang2".
 *
 * @property int $idKategoriBarang2
 * @property string $namaKategoriBarang
 * @property int $idKategoriBarang1
 *
 * @property KategoriBarang1 $kategoriBarang1
 * @property Product[] $products
 */
class KategoriBarang2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategoriBarang2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namaKategoriBarang', 'idKategoriBarang1'], 'required'],
            [['idKategoriBarang1'], 'integer'],
            [['namaKategoriBarang'], 'string', 'max' => 100],
            [['idKategoriBarang1'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriBarang1::className(), 'targetAttribute' => ['idKategoriBarang1' => 'idKategoriBarang1']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idKategoriBarang2' => 'Id Kategori Barang2',
            'namaKategoriBarang' => 'Nama Kategori Barang (Second Level)',
            'idKategoriBarang1' => 'Kategori Barang (First Level)',
            'kategoriBarang1.namaKategoriBarang' => 'Nama Kategori Barang (First Level)',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriBarang1()
    {
        return $this->hasOne(KategoriBarang1::className(), ['idKategoriBarang1' => 'idKategoriBarang1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['idKategoriBarang2' => 'idKategoriBarang2']);
    }
}
