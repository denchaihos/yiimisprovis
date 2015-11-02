<?php
use kartik\grid\GridView;
use kartik\export\ExportMenu;
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
                'label' => 'hn',
                'attribute' => 'hn'
            ],
            [
                'label' => 'ชื่อ',
                'attribute' => 'fname'
            ],
            [
                'label' => 'สกุล',
                'attribute' => 'lname'
            ]

        ]
    ]);
    ?>
</div>
