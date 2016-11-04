<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "falkutas".
 *
 * @property integer $falkutas_id
 * @property string $falkutas_name
 *
 * @property Jurusan[] $jurusans
 */
class Falkutas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'falkutas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['falkutas_name'], 'required'],
            [['falkutas_name'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'falkutas_id' => 'Falkutas ID',
            'falkutas_name' => 'Falkutas Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJurusans()
    {
        return $this->hasMany(Jurusan::className(), ['falkutas_id' => 'falkutas_id']);
    }
}
