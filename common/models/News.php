<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $idNews
 * @property string $date
 * @property string $judul
 * @property string $isi
 * @property string $tipe
 * @property string $headline
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['judul'], 'required'],
            [['isi', 'tipe', 'headline'], 'string'],
            [['judul'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNews' => 'Id News',
            'date' => 'Tanggal Publish/Update',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'tipe' => 'Tipe',
            'headline' => 'Headline',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsImages()
    {
        return $this->hasMany(NewsImage::className(), ['idNews' => 'idNews']);
    }
}
