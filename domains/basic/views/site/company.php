<?php
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = $company->name;
?>

<h1>Страница компании <?= $company->name ?> </h1>

<?php if ($company->logo): ?>
    <?= Html::img('@web/img/logos/' . $company->logo, ['alt' => $company->name, 'class' => 'company-logo', 'width' => '500vw', 'height' => '350vw']) ?>
<?php endif; ?>

<p><?= $company->description ?></p>

<?= Html::a('Посмотреть отзывы', Url::to(['site/review', 'companyId' => $company->id]), ['class' => 'btn btn-primary']) ?>