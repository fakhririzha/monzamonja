<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $idProduct
 * @property int $idUser
 * @property string $namaBarang
 * @property string $date
 * @property string $deskripsi
 * @property int $idKategori
 * @property int $harga
 * @property string $foto
 * @property string $status
 * @property string $sudahLaku
 *
 * @property Kategori $kategori
 */
class Product extends \yii\db\ActiveRecord
{
    public $file;
    public $hargaMin;
    public $hargaMax;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUser', 'namaBarang', 'deskripsi', 'idKategori', 'foto', 'harga'], 'required'],
            [['idUser', 'idKategori', 'idKategoriBarang2'], 'integer'],
            [['date'], 'safe'],
            [['deskripsi', 'foto', 'status', 'sudahLaku'], 'string'],
            [['file'], 'file'],
            [['foto', 'file'], 'required', 'on' => 'create'],
            [['namaBarang'], 'string', 'max' => 180],
            [['harga', 'hargaMin', 'hargaMax'], 'integer', 'max' => 999999999999],
            [['idKategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['idKategori' => 'idKategori']],
            [['idKategoriBarang2'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriBarang2::className(), 'targetAttribute' => ['idKategoriBarang2' => 'idKategoriBarang2']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idProduct' => 'Id Product',
            'date' => 'Tanggal Upload',
            'idUser' => 'User',
            'namaBarang' => 'Nama Barang',
            'deskripsi' => 'Deskripsi',
            'idKategori' => 'Dijual atau Giveaway?',
            'kategori.namaKategori' => 'Dijual atau Giveaway?',
            'idKategoriBarang2' => 'Kategori Barang',
            'harga' => 'Harga',
            'status' => 'Status',
            'foto' => 'Foto',
            'file' => 'Foto',
            'kategori.namaKategori' => 'Kategori',
            'user.nomorHandphone' => 'Kontak Penjual',
            'hargaMax' => 'Maximal Harga',
            'hargaMin' => 'Minimal Harga',
            'user.provinsi.nama' => 'Provinsi Penjual',
            'sudahLaku' => 'Produk Sudah Laku Terjual?',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['idKategori' => 'idKategori']);
    }

    public function getUser()
    {
        return $this->hasOne(UserEdit::className(), ['id' => 'idUser']);
    }
    
    public function getKategoriBarang2()
    {
        return $this->hasOne(KategoriBarang2::className(), ['idKategoriBarang2' => 'idKategoriBarang2']);
    }
}
