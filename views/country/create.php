<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = 'Crear Paises';
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-create">

    <h1><?= Html::encode($this->title) ?></h1>



<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'code') ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'population') ?>
<?= $form->field($model, 'images')->fileInput() ?>

<button>Submit</button>

<?php ActiveForm::end() ?>

</div>
