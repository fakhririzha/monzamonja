<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kategoriBarang1".
 *
 * @property int $idKategoriBarang1
 * @property string $namaKategoriBarang
 *
 * @property KategoriBarang2[] $kategoriBarang2s
 */
class KategoriBarang1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategoriBarang1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namaKategoriBarang'], 'required'],
            [['namaKategoriBarang'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idKategoriBarang1' => 'Id Kategori Barang1',
            'namaKategoriBarang' => 'Nama Kategori Barang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriBarang2s()
    {
        return $this->hasMany(KategoriBarang2::className(), ['idKategoriBarang1' => 'idKategoriBarang1']);
    }
}
