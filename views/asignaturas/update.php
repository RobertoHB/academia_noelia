<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asignaturas */

$this->title = 'Update Asignaturas: ' . $model->id_as;
$this->params['breadcrumbs'][] = ['label' => 'Asignaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_as, 'url' => ['view', 'id' => $model->id_as]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asignaturas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
