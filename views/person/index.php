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
      'label' => 'รหัสสถานบริการ',
      'attribute' => 'pcucodeperson'
    ],
    [
      'label' => 'ชื่อ',
      'attribute' => 'fname'
    ],
    [
      'label' => 'สกุล',
      'attribute' => 'lname'
    ],
    [
      'label' => 'เลข 13 หลัก',
      'attribute' => 'idcard'
      ]

    ]
  ]);
  ?>
  </div>
