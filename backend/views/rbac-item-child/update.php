<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\RbacItemChild $model */

$this->title = 'Update Rbac Item Child: ' . $model->parent;
$this->params['breadcrumbs'][] = ['label' => 'Rbac Item Children', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->parent, 'url' => ['view', 'parent' => $model->parent, 'child' => $model->child]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rbac-item-child-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
