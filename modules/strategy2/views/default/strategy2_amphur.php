<?php
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use yii\base\Model;
?>
<div>
    <?php
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'hover' => true,
        'panel' => [
            'before' => ' ',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                // 'label' => 'ampurcode',
                'attribute' => 'hoscode',

            ],
            [
                // 'label' => 'ampurname',
                'attribute' => 'hosname',
            ],


        ]
    ]);
    ?>
</div>
