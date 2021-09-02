<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Paises';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Pais', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'code',
            'name',
            'population',
            [

                'attribute' => 'img',
    
                'format' => 'html',
    
                'label' => 'Imagen',
    
                'value' => function ($data) {
    
                    return Html::img('assets/img/'.$data['images'],
    
                        ['width' => '60px']);
    
                },
    
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
