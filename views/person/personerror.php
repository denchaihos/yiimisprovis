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
      'label' => 'รหัสอำเภอ',
      'attribute' => 'ampurcode',
      'format'=>'raw',
      'value'=>function ($data, $key, $index, $widget) {
        return Html::a($data['ampurcode'],
        'index.php?r=person/personerror_amphur/&amphurcode='.$data['ampurcode'],
        ['title'=>'personerror_amphur', 'target' => '_blank',]);
      },
    ],
    [
      'label' => 'ชื่ออำเภอ',
      'attribute' => 'ampurname',
        'format'=>'raw',
      'value'=>function ($data, $key, $index, $widget) {
    return Html::a($data['ampurname'],
        'index.php?r=person/personerror_amphur/&amphurcode='.$data['ampurcode'],
        ['title'=>'personerror_amphur', 'target' => '_blank',]);
},
    ],
    [
      'label' => 'ทั้งหมด',
      'attribute' => 'TYPE_ALL'
    ],
    [
      'label' => '1,3',
      'attribute' => 'TYPE13'
    ],
    [
      'label' => '2,4',
      'attribute' => 'TYPE24'
    ],
    [
      'label' => 'err_cid',
      'attribute' => 'err_cid'
    ],
    [
      'label' => 'cid ซ้ำ',
      'attribute' => 'err_cid_dup'
    ],
    [
      'label' => ' อายุ',
      'attribute' => 'err_age'
    ],
    [
      'label' => 'การศึกษา',
      'attribute' => 'err_edu'
    ],
    [
      'label' => 'ศาสนา',
      'attribute' => 'err_rel'
    ],
    [
      'label' => 'อาชีพ',
      'attribute' => 'err_occ'
    ],
    [
      'label' => 'สัญชาติ',
      'attribute' => 'err_nat'
    ],
    [
      'label' => 'ตาย',
      'attribute' => 'err_death'
    ],

    ]
  ]);
  ?>
  </div>
