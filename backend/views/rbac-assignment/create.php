<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\RbacAssignment $model */

$this->title = 'Create User Assignment';
$this->params['breadcrumbs'][] = ['label' => 'User Assignments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rbac-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
