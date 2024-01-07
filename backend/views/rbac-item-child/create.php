<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\RbacItemChild $model */

$this->title = 'Create Rbac Item Child';
$this->params['breadcrumbs'][] = ['label' => 'Rbac Item Children', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rbac-item-child-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
