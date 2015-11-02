<?php
use yii\base\Model;
use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\widgets\DatePicker;
/*
// usage without model
echo '<label>Check Issue Date</label>';
echo DatePicker::widget([
    'name' => 'check_issue_date',
    'value' => date('d-M-Y', strtotime('+2 days')),
    'options' => ['placeholder' => 'Select issue date ...'],
    'pluginOptions' => [
        'format' => 'dd-M-yyyy',
        'todayHighlight' => true
    ]
])
*/

?>

<div>
    <?php
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'hover' => true,
        'panel' => [
            'before' => ' ', 'heading'=>'Grid Grouping Example', 'type'=>'primary',
        ],


        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ampurcode',
            [
               // 'label' => 'ampurname',
                'attribute' => 'ampurname',
                'format'=>'raw',
                'value'=>function ($data, $key, $index, $widget) {
                        return Html::a($data['ampurname'],
                            'index.php?r=strategy2/default/strategy2_amphur/&amphurcode='.$data['ampurcode'],
                            ['title'=>'personerror_amphur', 'target' => '_parent',]);
                    },
            ],


        ]
    ]);
    ?>
</div>
