<?php

namespace app\models;
use yii\db\ActiveRecord;

class Reviews extends ActiveRecord{
    public function upload()
    {
        if ($this->validate()) {
            $this->photo->saveAs('web/img/photos/' . $this->photo->baseName . '.' . $this->photo->extension);
            return true;
        } else {
            return false;
        }
    }

    public function attributeLabels()
    {
        return [
            'author_name' => 'Имя Автора',
            'review_text' => 'Текст отзыва',
            'company_id' => 'Название компании',
            'verification' => 'Опубликован'
        ];
    }

    public function rules()
    {
        return [
            [['author_name', 'review_text', 'company_id', 'verification'], 'required'],
            [['author_name', 'review_text', 'company_id', 'verification'], 'string'],
            [['photo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

}
