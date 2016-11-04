<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property integer $test_id
 * @property string $test_name
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['test_name'], 'required'],
            [['test_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'test_id' => 'ID',
            'test_name' => 'Name',
        ];
    }
}
