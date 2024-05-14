<?php

use app\modules\admin\models\reviews;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Reviews';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reviews', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'author_name',
            'photo',
            'review_text:ntext',
            'company_id',
            [ 'attribute' => 'status',
            'label' => 'Опубликован',
            'value' => function($data) {
                return !$data->verification == 0 ? 'Да' : 'Нет';

            }
            ],


            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, reviews $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
