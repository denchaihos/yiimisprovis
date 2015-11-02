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
            [
                'label' => 'อำเภอ',
                'attribute' => 'AMPNAME',
                'format'=>'raw',
                'value'=>function ($data, $key, $index, $widget) {
                        return Html::a($data['AMPNAME'],
                            'index.php?r=strategy1/default/office/&amphurcode='.$data['AMPCODE'],
                            ['title'=>'personerror_amphur', 'target' => '_parent',]);
                    },
            ],
            'schizo_target',
            'schizo_result',
            'schizo_rate',
            'adhd_target',
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
