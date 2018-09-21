<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Registroweb */

$this->title = Yii::t('app', 'Create Registroweb');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Registrowebs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registroweb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
