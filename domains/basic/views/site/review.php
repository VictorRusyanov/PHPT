<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $company app\models\Companies */
/* @var $reviews app\models\Reviews[] */

$this->title = 'Отзывы о компании ' . $company->name;
?>

<h1>Отзывы о компании <?= Html::encode($company->name) ?></h1>

<?php if (empty($reviews)): ?>
    <p>Пока нет отзывов об этой компании.</p>
<?php else: ?>
    <div>
        <?php foreach ($reviews as $review): ?>
            <div class="card">
                <h3><?= Html::encode($review->author_name) ?></h3>
                <?php if ($review->photo): ?>
                    <?= Html::img('@web/img/photos/' . $review->photo, ['alt' => 'Фото отзыва',]) ?>
                <?php endif; ?>
                <p>
                    <a href="<?= Url::to(['site/full', 'id' => $review->id]) ?>" class="review">
                        <?= StringHelper::truncate(Html::encode($review->review_text), 100, '...') ?>
                    </a>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?= Html::a('Оставить отзыв', ['site/create', 'companyId' => $company->id], ['class' => 'btn btn-primary']) ?>

<div class="nav-links">
    <?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?>
</div>

