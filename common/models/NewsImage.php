<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news_image".
 *
 * @property int $idNewsImage
 * @property int $idNews
 * @property string $dateNewsImage
 * @property string $image
 *
 * @property News $news
 */
class NewsImage extends \yii\db\ActiveRecord
{
    public $file;
    public $namaFoto;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idNews', 'file', 'namaFoto'], 'required'],
            [['idNews'], 'integer'],
            [['dateNewsImage'], 'safe'],
            [['file'], 'file'],
            [['image'], 'string', 'max' => 500],
            [['namaFoto'], 'string', 'max' => 30],
            [['idNews'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['idNews' => 'idNews']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNewsImage' => 'Id News Image',
            'idNews' => 'News',
            'dateNewsImage' => 'Date News Image',
            'image' => 'Image',
            'file' => 'Image',
            'namaFoto' => 'Nama Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['idNews' => 'idNews']);
    }
}
