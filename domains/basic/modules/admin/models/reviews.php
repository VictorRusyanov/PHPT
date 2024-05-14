<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property string $author_name
 * @property string|null $photo
 * @property string|null $review_text
 * @property int|null $company_id
 *
 * @property Companies $company
 */
class reviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_name'], 'required'],
            [['review_text'], 'string'],
            [['company_id'], 'integer'],
            [['author_name', 'photo'], 'string', 'max' => 255],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Companies::class, 'targetAttribute' => ['company_id' => 'id']],
            [['verification'], 'required'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ отзыва',
            'author_name' => 'Имя автора',
            'photo' => 'Фото',
            'review_text' => 'Текст отзыва',
            'company_id' => 'ID компании',
            'verification' => 'Опубликован',
        ];
    }

    /**
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Companies::class, ['id' => 'company_id']);
    }
}
