<?php
namespace app\modules\strategy1\controllers;

use yii\web\Controller;
use yii\data\ArrayDataProvider;

class DefaultController extends Controller
{
    public function actionIndex()
    {
      $connect = \Yii::$app->db;
      $dataSql = $connect->createCommand('
        select * from sys_report where id=3
      ')->queryAll();
      //print_r($dataProvider);
      for($i=0;$i<1;$i++){
          $sqlText = $dataSql[0]['script_amphur'];
          $reportName = $dataSql[0]['report_name'];
      }
      $data = $connect->createCommand(
          $sqlText
      )->queryAll();
      $dataProvider = new ArrayDataProvider([
          'allModels' => $data
      ]);
      $dataProvider->pagination->pageSize=100;
      return $this->render('index',[
          'dataProvider' => $dataProvider,'reportName' => $reportName
      ]) ;
    }

    public function actionOffice()
    {
      $connect = \Yii::$app->db;
      $dataSql = $connect->createCommand('
        select * from sys_report where id=3
      ')->queryAll();
      //print_r($dataProvider);
      for($i=0;$i<1;$i++){
          $sqlText = $dataSql[0]['script_office'];
          $reportName = $dataSql[0]['report_name'];
      }
      $data = $connect->createCommand(
          $sqlText.' WHERE AMPCODE='.$_GET['amphurcode'].' ;'
      )->queryAll();
      $dataProvider = new ArrayDataProvider([
          'allModels' => $data
      ]);
      $dataProvider->pagination->pageSize=100;
      return $this->render('office',[
          'dataProvider' => $dataProvider,'reportName' => $reportName
      ]) ;
    }

    public function actionPerson()
    {
      $connect = \Yii::$app->db;
      $dataSql = $connect->createCommand('
        select * from sys_report where id=3
      ')->queryAll();
      //print_r($dataProvider);
      for($i=0;$i<1;$i++){
          $sqlText = $dataSql[0]['script_individual'];
          $reportName = $dataSql[0]['report_name'];
      }
      $data = $connect->createCommand(
          $sqlText.' WHERE HOSPCODE='.$_GET['hospcode'].' AND '.$_GET['text'].'=1 ;'
      )->queryAll();
      $dataProvider = new ArrayDataProvider([
          'allModels' => $data
      ]);
      $dataProvider->pagination->pageSize=100;
      return $this->render('person',[
          'dataProvider' => $dataProvider,'reportName' => $reportName
      ]) ;
    }

}
