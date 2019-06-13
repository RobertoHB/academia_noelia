<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfesoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellidos') ?>

    <?= $form->field($model, 'direccion') ?>

    <?= $form->field($model, 'nif') ?>

    <?php // echo $form->field($model, 'nacimiento') ?>

    <?php // echo $form->field($model, 'alta') ?>

    <?php // echo $form->field($model, 'baja') ?>

    <?php // echo $form->field($model, 'movil') ?>

    <?php // echo $form->field($model, 'mail') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
