<?php
namespace app\backend\models;

class Tag extends \app\backend\components\ActiveRecord
{
    public static function tableName()
    {
        return 'easyii_tags';
    }

    public function rules()
    {
        return [
            ['name', 'required'],
            ['frequency', 'integer'],
            ['name', 'string', 'max' => 64],
        ];
    }
}