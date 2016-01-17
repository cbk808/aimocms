<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserForm */

$this->title = Yii::t('app', '新增用户');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '用户管理'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
