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
      'label' => 'รหัสสถานบริการ',
      'attribute' => 'hoscode'
    ],
    [
      'label' => 'ชื่อสถานบริการ',
      'attribute' => 'hosname'
    ],
      [
          'label' => 'ทั้งหมด',
          'attribute' => 'TYPE_ALL',
          'format'=>'raw',
          'value'=>function ($data, $key, $index, $widget) {
                  return Html::a($data['TYPE_ALL'],
                      'index.php?r=person/personerror_indiv/&hoscode='.$data['hoscode'].'&error_code=TYPE_ALL',
                      ['title'=>'epi detail', 'target' => '_blank',]);
              },
      ],
      [
          'label' => '1,3',
          'attribute' => 'TYPE13',
          'format'=>'raw',
          'value'=>function ($data, $key, $index, $widget) {
                  return Html::a($data['TYPE13'],
                      'index.php?r=person/personerror_indiv/&hoscode='.$data['hoscode'].'&error_code=TYPE13',
                      ['title'=>'epi detail', 'target' => '_blank',]);
              },
      ],
      [
          'label' => '2,4',
          'attribute' => 'TYPE24',
          'format'=>'raw',
          'value'=>function ($data, $key, $index, $widget) {
                  return Html::a($data['TYPE24'],
                      'index.php?r=person/personerror_indiv/&hoscode='.$data['hoscode'].'&error_code=TYPE24',
                      ['title'=>'epi detail', 'target' => '_blank',]);
              },
      ],

      [
      'label' => 'err_cid',
      'attribute' => 'err_cid',
      'format'=>'raw',
      'value'=>function ($data, $key, $index, $widget) {
        return Html::a($data['err_cid'],
        'index.php?r=person/personerror_indiv/&hoscode='.$data['hoscode'].'&error_code=error_cid',
        ['title'=>'epi detail', 'target' => '_blank',]);
      },
    ],
      [
          'label' => 'cid ซ้ำ',
          'attribute' => 'err_cid_dup',
          'format'=>'raw',
          'value'=>function ($data, $key, $index, $widget) {
                  return Html::a($data['err_cid_dup'],
                      'index.php?r=person/personerror_indiv/&hoscode='.$data['hoscode'].'&error_code=err_cid_dup',
                      ['title'=>'epi detail', 'target' => '_blank',]);
              },
      ],
    [
      'label' => 'อายุ',
      'attribute' => 'err_age',
      'format'=>'raw',
      'value'=>function ($data, $key, $index, $widget) {
        return Html::a($data['err_age'],
        'index.php?r=person/personerror_indiv/&hoscode='.$data['hoscode'].'&error_code=err_age',
        ['title'=>'epi detail', 'target' => '_blank',]);
      },
    ],
    [
      'label' => 'การศึกษา',
      'attribute' => 'err_edu',
      'format'=>'raw',
      'value'=>function ($data, $key, $index, $widget) {
        return Html::a($data['err_edu'],
        'index.php?r=person/personerror_indiv/&hoscode='.$data['hoscode'].'&error_code=err_edu',
        ['title'=>'epi detail', 'target' => '_blank',]);
      },
    ],
    [
      'label' => 'ศาสนา',
      'attribute' => 'err_rel',
      'format'=>'raw',
      'value'=>function ($data, $key, $index, $widget) {
        return Html::a($data['err_rel'],
        'index.php?r=person/personerror_indiv/&hoscode='.$data['hoscode'].'&error_code=err_rel',
        ['title'=>'epi detail', 'target' => '_blank',]);
      },
    ],
    [
      'label' => 'อาชีพ',
      'attribute' => 'err_occ',
      'format'=>'raw',
      'value'=>function ($data, $key, $index, $widget) {
        return Html::a($data['err_occ'],
        'index.php?r=person/personerror_indiv/&hoscode='.$data['hoscode'].'&error_code=err_occ',
        ['title'=>'epi detail', 'target' => '_blank',]);
      },
    ],
    [
      'label' => 'สัญชาติ',
      'attribute' => 'err_nat',
      'format'=>'raw',
      'value'=>function ($data, $key, $index, $widget) {
              return Html::a($data['err_occ'],
                  'index.php?r=person/personerror_indiv/&hoscode='.$data['hoscode'].'&error_code=err_nat',
                  ['title'=>'epi detail', 'target' => '_blank',]);
      },
    ],

      [
          'label' => 'ตาย',
          'attribute' => 'err_death',
          'format'=>'raw',
          'value'=>function ($data, $key, $index, $widget) {
                  return Html::a($data['err_death'],
                      'index.php?r=person/personerror_indiv/&hoscode='.$data['hoscode'].'&error_code=err_death',
                      ['title'=>'epi detail', 'target' => '_blank',]);
              },
      ],



    ]
  ]);
  ?>
  </div>
