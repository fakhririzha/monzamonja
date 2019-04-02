<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProductHistory;
use common\models\Kabupaten;
use common\models\UserEdit;
use common\models\Kategori;

/**
 * This is the model class for table "product_history".
 *
 * @property int $idProductHistory
 * @property string $actionDate
 * @property int $idProduct
 * @property int $idUser
 * @property string $namaBarang
 * @property string $date
 * @property string $deskripsi
 * @property int $idKategori
 * @property int $harga
 * @property string $foto
 * @property string $status
 * @property string $action
 */
class ProductHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['actionDate', 'date'], 'safe'],
            [['idProduct', 'idUser', 'namaBarang', 'deskripsi', 'idKategori', 'foto', 'action'], 'required'],
            [['idProduct', 'idUser', 'idKategori', 'harga'], 'integer'],
            [['deskripsi', 'status', 'action'], 'string'],
            [['namaBarang'], 'string', 'max' => 200],
            [['foto'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idProductHistory' => 'Id Product History',
            'actionDate' => 'Tanggal Proses',
            'action' => 'Action',
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
    
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['idKategori' => 'idKategori']);
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
