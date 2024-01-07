<?php

use backend\models\RbacItemChild;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\RbacItemChildSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rbac Item Children';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rbac-item-child-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rbac Item Child', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'parent',
            'child',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RbacItemChild $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'parent' => $model->parent, 'child' => $model->child]);
                 }
            ],
        ],
    ]); ?>


</div>
