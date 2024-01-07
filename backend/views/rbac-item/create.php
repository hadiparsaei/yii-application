<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\RbacItem $model */

$this->title = 'Create Role';
$this->params['breadcrumbs'][] = ['label' => 'Create Role', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rbac-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
