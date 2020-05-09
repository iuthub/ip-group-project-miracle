<?php

namespace backend\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yiidreamteam\upload\ImageUploadBehavior;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $photo
 * @property int $created_at
 * @property int $updated_at
 */
class Gallery extends \yii\db\ActiveRecord
{
    public $date;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'photo'], 'required'],
            [[ 'created_at', 'updated_at'], 'integer'],
            ['photo', 'image','extensions' => 'jpeg, png, jpg, gif', 'skipOnEmpty' => true, 'checkExtensionByMimeType' => true],
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => AttributeBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['date'],

                ],
                'value' => function ($event) {
                    return strtotime($this->date);
                },
            ],

            TimeStampBehavior::class,
            [
                'class' => ImageUploadBehavior::class,
                'attribute' => 'photo',
                'createThumbsOnRequest' => true,
                'filePath' => '@storageRoot/store/gallery/[[attribute_id]]/[[filename]].[[extension]]',
                'fileUrl' => '@storageHostInfo/store/gallery/[[attribute_id]]/[[filename]].[[extension]]',
                'thumbPath' => '@storageRoot/cache/gallery/[[attribute_id]]/[[profile]]_[[filename]].[[extension]]',
                'thumbUrl' => '@storageHostInfo/cache/gallery/[[attribute_id]]/[[profile]]_[[filename]].[[extension]]',
                'thumbs' => [
                    's16' => ['width' => 16, 'height' => 16],
                    's32' => ['width' => 32, 'height' => 32],
                    's48' => ['width' => 48, 'height' => 48],
                    's128' => ['width' => 128, 'height' => 128],
                    's160' => ['width' => 160, 'height' => 160],
                ],
            ],
        ];
    }
    public function beforeValidate()
    {
        if (parent::beforeValidate()) {
            $this->photo = UploadedFile::getInstance($this, 'photo');
            return true;
        }
        return false;
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'photo' => Yii::t('app', 'Photo'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}