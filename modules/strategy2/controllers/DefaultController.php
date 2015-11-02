<?php

namespace app\modules\strategy2\controllers;

use yii\web\Controller;
use yii\data\ArrayDataProvider;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $connect = \Yii::$app->db;
        $dataSql = $connect->createCommand('
          select * from sys_report where id=2
        ')->queryAll();
        //print_r($dataProvider);
        for($i=0;$i<1;$i++){
            $sqlText = $dataSql[0]['script_amphur'];
        }
        $data = $connect->createCommand(
            $sqlText
        )->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data
        ]);
        $dataProvider->pagination->pageSize=100;
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]) ;

    }
    public function actionStrategy2_amphur($amphurcode){
        $connect = \Yii::$app->db;
        $dataSql = $connect->createCommand('select * from sys_report where id=2')->queryAll();
        $dataProvider2 = new ArrayDataProvider([
            'allModels' => $dataSql
        ]);
        //print_r($dataProvider);
        for($i=0;$i<1;$i++){
            $sqlText = $dataSql[0]['script_amphur'];
        }
        $sqlText1 = $sqlText.' AND 1 = 1 AND b.hdc_regist = 1 AND b.distcode = '.$amphurcode;
        $dataAmphur = $connect->createCommand($sqlText1)->queryAll();
        $dataProvider3 = new ArrayDataProvider([
            'allModels' => $dataAmphur
        ]);
        //$dataProvider3->pagination->pageSize=100;
        return $this->render('strategy2_amphur',[
            'dataProvider' => $dataProvider3
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
