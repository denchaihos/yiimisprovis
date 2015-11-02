<?php
namespace app\controllers;
use yii\web\Controller;
use yii\data\ArrayDataProvider;
//สร้าง Controller ชื่อ PersonController
class PersonController extends Controller{
  //สร้าง Action ชื่อ Index
  public function actionIndex(){

  //สั่งให้ ไป Connect กับ Database ตัวไหน
  //กรณีนี้ ไป Connect กับ Database ชื่อ db
  //ที่เราไปกำหนดในไฟล์ config/db.php
  $connect = \Yii::$app->db;

  //สร้างคำสั่ง query โดยเอาผลที่ได้ ไปเก็บไว้ใน ตัวแปรชื่อ
  // $dataperson
  $dataperson = $connect->createCommand('
      select * from person limit 50
  ')->queryAll();

  //จากนั้นแปลงผลของคำสั่ง query ที่ได้ เป็นแบบ ArrayDataProvider
  //เพื่อให้ yii รู้จัก และนำไปใช้ได้
    $dataProvider = new ArrayDataProvider([
      'allModels' => $dataperson
      ]);

    //สั่งให้ Action นี้ไปแสดงผลที่ไหน กรณีนี้ สั่งให้ไปแสดงผลที่ไฟล์ index
    //โดยให้นำตัวแปร $dataProvider ไปแสดงผลที่หน้า index ด้วย
    // http://localhost/index.php?dataprovier=dataprovider
    return $this->render('index',[
      'dataProvider' => $dataProvider
      ]) ;
  }

  public function actionPersonerror(){

      $connect = \Yii::$app->db;
      $data = $connect->createCommand('
          select * from sys_report where id=1
        ')->queryAll();
      $dataProvider2 = new ArrayDataProvider([
          'allModels' => $data
      ]);
      //print_r($dataProvider);
      for($i=0;$i<1;$i++){
          $sqlText = $data[0]['script_changwat'];
      }
      $data = $connect->createCommand(
          $sqlText
      )->queryAll();
      $dataProvider = new ArrayDataProvider([
          'allModels' => $data
      ]);

    return $this->render('personerror',[
      'dataProvider' => $dataProvider
      ]);
  }

  public function actionPersonerror_amphur($amphurcode){
      $connect = \Yii::$app->db;
      $data = $connect->createCommand('
          select * from sys_report where id=1
        ')->queryAll();
      $dataProvider2 = new ArrayDataProvider([
          'allModels' => $data
      ]);

      for($i=0;$i<1;$i++){
          $sqlText = $data[0]['script_amphur'];
      }
      $data = $connect->createCommand(
          $sqlText.'AND a.distcode ='.$amphurcode
      )->queryAll();
      $dataProvider = new ArrayDataProvider([
          'allModels' => $data
      ]);

      return $this->render('personerror_amphur',[
        'dataProvider' => $dataProvider
        ]);
    }
    public function actionPersonerror_indiv($hoscode,$error_code){

      if($error_code=='error_cid'){
        $sql='SELECT HOSPNAME,PID,CONCAT(NAME,"  ",LNAME) as ptname,CID FROM t_person_error_cid  WHERE HOSPCODE='.$hoscode;
      }elseif($error_code=='err_age'){
          $sql='SELECT HOSPNAME,PID,CONCAT(NAME,"  ",LNAME) as ptname,CID FROM t_person_error_age  WHERE HOSPCODE='.$hoscode;
      }elseif($error_code=='err_edu'){
          $sql='SELECT HOSPNAME,PID,CONCAT(NAME,"  ",LNAME) as ptname,CID FROM t_person_error_education  WHERE HOSPCODE='.$hoscode;
      }elseif($error_code=='err_rel'){
          $sql='SELECT HOSPNAME,PID,CONCAT(NAME,"  ",LNAME) as ptname,CID FROM t_person_error_religion  WHERE HOSPCODE='.$hoscode;
      }elseif($error_code=='err_occ'){
          $sql='SELECT HOSPNAME,PID,CONCAT(NAME,"  ",LNAME) as ptname,CID FROM t_person_error_occupation_new  WHERE HOSPCODE='.$hoscode;
      }elseif($error_code=='err_nation'){
          $sql='SELECT HOSPNAME,PID,CONCAT(NAME,"  ",LNAME) as ptname,CID FROM t_person_error_education  WHERE HOSPCODE='.$hoscode;
      }elseif($error_code=='err_death'){
          $sql='SELECT HOSPNAME,PID,CONCAT(NAME,"  ",LNAME) as ptname,CID FROM t_person_error_death  WHERE HOSPCODE='.$hoscode;
      }else{
          $sql='SELECT HOSPNAME,PID,CONCAT(NAME,"  ",LNAME) as ptname,CID FROM t_person_error_typearea  WHERE HOSPCODE='.$hoscode;
      }

      $connect = \Yii::$app->db;
      $dataperson = $connect->createCommand($sql
      )->queryAll();

          $dataProvider = new ArrayDataProvider([
            'allModels' => $dataperson
            ]);

        return $this->render('personerror_indiv',[
          'dataProvider' => $dataProvider
          ]);
      }


}
