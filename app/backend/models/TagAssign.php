<?php
namespace app\backend\models;

class TagAssign extends \app\backend\components\ActiveRecord
{
    public static function tableName()
    {
        return 'easyii_tags_assign';
    }
}