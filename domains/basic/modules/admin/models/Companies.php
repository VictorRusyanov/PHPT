<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Companies".
 *
 * @property int $id
 * @property string $name
 * @property string|null $logo
 * @property string|null $description
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Companies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'logo' => 'Logo',
            'description' => 'Description',
        ];
    }
}
