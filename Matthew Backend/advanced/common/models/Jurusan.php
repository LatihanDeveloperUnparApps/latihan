<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jurusan".
 *
 * @property integer $jurusan_id
 * @property string $jurusan_name
 * @property integer $falkutas_id
 *
 * @property Falkutas $falkutas
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jurusan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jurusan_name', 'falkutas_id'], 'required'],
            [['falkutas_id'], 'integer'],
            [['jurusan_name'], 'string', 'max' => 40],
            [['falkutas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Falkutas::className(), 'targetAttribute' => ['falkutas_id' => 'falkutas_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jurusan_id' => 'Jurusan ID',
            'jurusan_name' => 'Jurusan Name',
            'falkutas_id' => 'Falkutas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFalkutas()
    {
        return $this->hasOne(Falkutas::className(), ['falkutas_id' => 'falkutas_id']);
    }
}
