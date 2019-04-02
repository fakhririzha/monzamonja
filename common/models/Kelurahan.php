<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelurahan".
 *
 * @property string $id_kel
 * @property string $id_kec
 * @property string $nama
 * @property int $id_jenis
 *
 * @property Kecamatan $kec
 */
class Kelurahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelurahan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kel', 'id_jenis'], 'required'],
            [['nama'], 'string'],
            [['id_jenis'], 'integer'],
            [['id_kel'], 'string', 'max' => 10],
            [['id_kec'], 'string', 'max' => 6],
            [['id_kel'], 'unique'],
            [['id_kec'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::className(), 'targetAttribute' => ['id_kec' => 'id_kec']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kel' => 'Id Kel',
            'id_kec' => 'Id Kec',
            'nama' => 'Nama',
            'id_jenis' => 'Id Jenis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKec()
    {
        return $this->hasOne(Kecamatan::className(), ['id_kec' => 'id_kec']);
    }
}
