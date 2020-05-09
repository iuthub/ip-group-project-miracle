<?php

namespace backend\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "sliders".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_uz
 * @property string $title_en
 * @property string $description_ru
 * @property string $description_uz
 * @property string $description_en
 * @property int $created_at
 * @property int $updated_at
 * @property string $item1
 * @property string $item2
 * @property string $item3
 * @property string $item4
 * @property string $item5
 * @property string $item6
 * @property SliderPhotos[] $sliderPhotos
 */
class Sliders extends \yii\db\ActiveRecord
{
    public $date;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sliders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description_ru', 'description_uz', 'description_en'], 'required'],
            [['description_ru', 'description_uz', 'description_en','item1', 'item2', 'item3', 'item4','item5','item6'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['title_ru', 'title_uz', 'title_en'], 'string', 'max' => 255],
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
            TimeStampBehavior::class];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_en' => Yii::t('app', 'Description En'),
            'item1' => Yii::t('app', "Item1"),
            'item2' => Yii::t('app', "Item2"),
            'item3' => Yii::t('app', "Item3"),
            'item4' => Yii::t('app', "Item4"),
            'item5' => Yii::t('app', "Item5"),
            'item6' => Yii::t('app', "Item6"),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSliderPhotos()
    {
        return $this->hasMany(SliderPhotos::className(), ['slider_id' => 'id']);
    }
}