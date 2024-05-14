<?php
/** @var yii\web\View $this */

$this->title = 'Otziv';
?>

<body>
<h1>Добро пожаловать на сайт "Отзывы"!</h1>
<p>Здесь вы можете оставить свой отзыв о компаниях.</p>

<h2>Список компаний:</h2>
<ul>
    <?php foreach ($companies as $company): ?>
        <li><a href="/company/<?= $company->id ?>"><?= $company->name ?></a></li>
    <?php endforeach; ?>
</ul>

<!--<footer>-->
<!--    <p>&copy; 2022 Отзывы</p>-->
<!--</footer>-->
</body>