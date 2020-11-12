<?php

namespace common\models;

use yii\db\ActiveRecord;

class Course extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{course}}';
    }
}