<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $student_id
 * @property string $student_name
 * @property string $student_npm
 * @property integer $student_jurusan_id
 * @property string $student_created_date
 * @property string $student_content
 *
 * @property Jurusan $studentJurusan
 */
class Student extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_name', 'student_npm', 'student_jurusan_id', 'student_created_date', 'student_content'], 'required'],
            [['student_jurusan_id'], 'integer'],
            [['student_created_date'], 'safe'],
            [['student_content'], 'string'],
            //[['file'],'file','types'=>'jpg, gif, png'],
            [['student_picture'],'string'],
            [['student_name'], 'string', 'max' => 40],
            [['student_npm'], 'string', 'max' => 20],
            [['student_jurusan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['student_jurusan_id' => 'jurusan_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'student_name' => 'Student Name',
            'student_npm' => 'Student Npm',
            'student_jurusan_id' => 'Jurusan ID',
            'student_picture' => 'Student Picture link',
            'student_created_date' => 'Student Created Date',
            'student_content' => 'Student Content',
            'file' => 'Student picture',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentJurusan()
    {
        return $this->hasOne(Jurusan::className(), ['jurusan_id' => 'student_jurusan_id']);
    }
}
