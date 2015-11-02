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

            ['class' => 'yii\grid\SerialColumn'],
            'HOSPCODE',
            'HOSPNAME',
            [
                'label' => 'schizo_target',
                'attribute' => 'schizo_target',
                'format'=>'raw',
                'value'=>function ($data, $key, $index, $widget) {
                        return Html::a($data['schizo_target'],
                            'index.php?r=strategy1/default/person/&hospcode='.$data['HOSPCODE'].'&text=schizo_target',
                            ['title'=>'schizo_target', 'target' => '_parent',]);
                    },
            ],
            [
                'label' => 'schizo_result',
                'attribute' => 'schizo_result',
                'format'=>'raw',
                'value'=>function ($data, $key, $index, $widget) {
                        return Html::a($data['schizo_result'],
                            'index.php?r=strategy1/default/person/&hospcode='.$data['HOSPCODE'].'&text=schizo_result',
                            ['title'=>'schizo_target', 'target' => '_parent',]);
                    },
            ],
            'schizo_rate',
            [
                'label' => 'adhd_target',
                'attribute' => 'adhd_target',
                'format'=>'raw',
                'value'=>function ($data, $key, $index, $widget) {
                        return Html::a($data['adhd_target'],
                            'index.php?r=strategy1/default/person/&hospcode='.$data['HOSPCODE'].'&text=adhd_target',
                            ['title'=>'schizo_target', 'target' => '_parent',]);
                    },
            ],

            'adhd_result',
            'adhd_rate',
            'ld_target',
            'ld_result',
            'ld_rate',
            'autistic_target',
            'autistic_result',
            'autistic_rate',
            'id_target',
            'id_result',
            'id_rate',
            'D_UPDATE',


        ]
    ]);
    ?>
</div>
