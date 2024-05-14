<?php

namespace app\models;
use yii\db\ActiveRecord;

class Companies extends ActiveRecord{

    public static function getCompanyList()
    {
        return self::find()->select(['name', 'id'])->indexBy('id')->column();
    }

}