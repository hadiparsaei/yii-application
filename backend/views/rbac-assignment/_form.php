<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\RbacAssignment $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rbac-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_name')->dropDownList( ArrayHelper::map(\backend\models\RbacItem::find()->all(), 'name', 'name')) ?>


    <?= $form->field($model, 'user_id')->dropDownList( ArrayHelper::map(\backend\models\User::find()->all(), 'id', 'username'))  ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
