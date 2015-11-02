<?php
use yii\base\Model;
use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\widgets\DatePicker;

?>

<div>
    <?php
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'hover' => true,
        'panel' => [
            'before' => ' ', 'heading'=>$reportName, 'type'=>'primary',
        ],


        'columns' => [
/*
            ['class' => 'yii\grid\SerialColumn'],
            'HOSPCODE',
            [
                'label' => 'อำเภอ',
                'attribute' => 'HOSPNAME',
                'format'=>'raw',
                'value'=>function ($data, $key, $index, $widget) {
                        return Html::a($data['HOSPNAME'],
                            'index.php?r=strategy1/default/strategy1_person/&hospcode='.$data['HOSPCODE'],
                            ['title'=>'personerror_amphur', 'target' => '_parent',]);
                    },
            ],
*/


        ]
    ]);
    ?>
</div>
