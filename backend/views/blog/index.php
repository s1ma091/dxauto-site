<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Blog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title:html',
            'text:html',
            'all_text:html',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
