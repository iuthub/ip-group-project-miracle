<?php

namespace backend\models;


use common\models\Telegram;
use Yii;
use yii\db\ActiveRecord;
use yii\helpers\Html;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $full_name
 * @property string $phone
 * @property string $message $this->execute('sql', params);
 */
class Contacts extends \yii\db\ActiveRecord
{
    public $reCaptcha;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'phone', 'message'], 'required'],
            [['message'], 'string'],
            [['full_name', 'phone'], 'string', 'max' => 50],
            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator2::className(),
                'secret' => '6Le99dYUAAAAAIe4iDipHD6e1L14AqL7r1N-Jz3a', // unnecessary if reСaptcha is already configured
                'uncheckedMessage' => 'Пожалуйста, подтвердите, что вы не бот.'],
//                [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator3::className(),
//                    'secret' => '6LeN9tYUAAAAAFpA4YGPrZCMQBJkeH_-CdJUXHvv', // unnecessary if reСaptcha is already configured
//                    'threshold' => 0.5,
//                    'action' => 'homepage',
//                ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'full_name' => Yii::t('app', 'ФИО'),
            'phone' => Yii::t('app', 'Телефон'),
            'message' => Yii::t('app', 'Сообщение'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ],
            ],
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        if ($insert) {
            $text = "Murojaat qoldirildi! \n" .
                "FIO: " . $this->full_name . "\n" .
                "Telefon: " . $this->phone . "\n" .
                "Matn:" . $this->message;

            (new Telegram($text))->sendMessage();
        }
        parent::afterSave($insert, $changedAttributes);
    }
}