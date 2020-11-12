<?php

namespace common\models;

use yii\db\ActiveRecord;

class Call extends ActiveRecord
{
    const STATUS_SUCCESS = 0;
    const STATUS_FAILED = 1;
    const STATUS_PLANNES = 2;

    public static function tableName(): string
    {
        return '{{call}}';
    }
}