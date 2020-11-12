<?php

namespace common\models;

use yii\db\ActiveRecord;

class Manager extends ActiveRecord
{
    const STATUS_ACTIVE = 0;
    const STATUS_INACTIVE = 1;

    public static function tableName(): string
    {
        return '{{manager}}';
    }
}