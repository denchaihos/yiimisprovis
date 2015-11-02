<?php
use kartik\grid\GridView;
use kartik\export\ExportMenu;

/*
campur.ampurcode,
campur.ampurname,
sum(abc.error_cid) as cid,
sum(abc.error_age) as age,
sum(abc.error_dup) as dup,
sum(abc.error_edu) as edu,
sum(abc.error_leligion) as lel,
sum(abc.error_occu) as occ,
sum(abc.error_nation) as nat,
sum(abc.error_die) as die,
sum(alltype) as alltype,
sum(type13) as type13,
sum(type24) as type24
*/
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
                'label' => 'สถานบริการ',
                'attribute' => 'HOSPNAME'
            ],
            'PID',
            [
                'label' => 'ชื่อผู้รับบริการ',
                'attribute' => 'ptname'
            ],



            'CID'

        ]
    ]);
    ?>
</div>
