<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Добавить отзыв';
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="comment-form">
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'author_name')->textInput() ?>

    <?= $form->field($model, 'photo')->fileInput() ?>

    <?= $form->field($model, 'review_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company_id')->dropDownList($companies) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>