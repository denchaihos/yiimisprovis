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
      'label' => 'อำเภอ',
      'attribute' => 'ampurname'
    ],
    [
      'label' => 'cid',
      'attribute' => 'cid'
    ],
    [
      'label' => 'age',
      'attribute' => 'age'
    ],
    [
      'label' => 'dup',
      'attribute' => 'dup'
    ],
    [
      'label' => 'edu',
      'attribute' => 'edu'
    ],
    [
      'label' => 'lel',
      'attribute' => 'lel'
    ],
    [
      'label' => 'occ',
      'attribute' => 'occ'
    ],
    [
      'label' => 'nat',
      'attribute' => 'nat'
    ],
    [
      'label' => 'die',
      'attribute' => 'die'
    ],

    ]
  ]);
  ?>
  </div>
