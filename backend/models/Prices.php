<?php

namespace backend\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "prices".
 *
 * @property int $id
 * @property int $price
 * @property int $pupils
 * @property string $books
 * @property string $service
 * @property string $notebooks
 * @property int $online_translation
 * @property Courses $course
 */
class Prices extends \yii\db\ActiveRecord
{
    public $date;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'pupils','books','service','notebooks','online_translation','course_name'], 'required'],
//            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['course_id' => 'id']],
        ];
    }

//    public function behaviors()
//    {
//        return [
//            [
//                'class' => AttributeBehavior::class,
//                'attributes' => [
//                    ActiveRecord::EVENT_BEFORE_INSERT => ['date'],
//                    ActiveRecord::EVENT_BEFORE_UPDATE => ['date'],
//
//                ],
//                'value' => function ($event) {
//                    return strtotime($this->date);
//                },
//            ],
//        ];
//    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'course_id' => Yii::t('app', 'Course ID'),
            'price' => Yii::t('app', 'Price'),
            'pupils' => Yii::t('app', 'Pupils'),
            'books' => Yii::t('app', 'Books'),
            'service' => Yii::t('app', 'Service'),
            'notebooks' => Yii::t('app', 'Notebooks'),
            'online_translation' => Yii::t('app', 'Online Translation'),
        ];
    }





}