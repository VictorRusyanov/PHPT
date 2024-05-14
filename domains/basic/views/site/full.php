<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $review app\models\Reviews */

$this->title = 'Полный текст отзыва';
?>

<h1>Полный текст отзыва</h1>

<p><?= Html::encode($review->review_text) ?></p>
<div><?= Html::img('@web/img/photos/' . $review->photo, ['alt' => 'Фото отзыва', 'width' => '200vw', 'height' => '200vw',]) ?></div>

