<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registroweb".
 *
 * @property int $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $email
 * @property int $celular
 */
class Registroweb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registroweb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombres', 'apellidos', 'email', 'celular'], 'required'],
            [['celular'], 'integer'],
            [['nombres', 'apellidos', 'email'], 'string', 'max' => 70],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombres' => Yii::t('app', 'Nombres'),
            'apellidos' => Yii::t('app', 'Apellidos'),
            'email' => Yii::t('app', 'Email'),
            'celular' => Yii::t('app', 'Celular'),
        ];
    }
}
