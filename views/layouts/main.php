<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\nav\NavX;

AppAsset::register($this);

//use kongoon\theme\material;
//material\MaterialAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'ระบบข้อมูลสุขภาพและบริหารจัดการ 43 แฟ้ม',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo NavX::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => [
                    ['label' => 'หน้าหลัก', 'url' => ['/site/index']],
                    ['label' => 'พัฒนาสุขภาพตามกลุ่มวัย',
                        'items' => [
                            ['label' => 'กลุ่มปฐมวัย (0-5 ปี) และสตรี', 'items' => [
                                    [   'label' => 'รายงานภาวะการเจริญเติบโตของเด็กแรกเกิด - 5 ปี น้ำหนักเทียบกับอายุ', 'url' => ['#'],
                                        'options' => ['style' => 'white-space: normal;'],
                                    ],
                                    ['label' => 'รายงานภาวะการเจริญเติบโตของเด็กแรกเกิด - 5 ปี ส่วนสูงเทียบกับอายุ', 'url' => ['#']],
                                    ['label' => 'รายงานภาวะการเจริญเติบโตของเด็กแรกเกิด - 5 ปี น้ำหนักเทียบกับส่วนสูง', 'url' => ['#']],
                                    ['label' => 'รายงานจำนวนเด็กเกิดทั้งหมด', 'url' => ['#']],
                                    ['label' => 'รายงานจำนวนทารกตายปริกำเหนิด', 'url' => ['#']],
                                    ['label' => 'รายงานจำนวนเด็กอายุ มากกว่า 7 จนถึง 28  วัน เสียชีวิต', 'url' => ['#']],
                                    ['label' => 'รายงานจำนวนเด็กอายุ 8 วัน - 1 ปี เสียชีวิต', 'url' => ['#']],
                                    ['label' => 'ร้อยละความครอบคลุมของเด็กอายุ 0 - 5 ปี ได้รับวัคซีนครบตามเกณฑ์', 'url' => ['#']],
                                    ['label' => 'ร้อยละการประเมินคุณภาพการได้รับวัคซีนครบตามเกณฑ์ของเด็กอายุ 0 - 5 ปี', 'url' => ['#']],
                                    ['label' => 'รายงานอัตราภาวะการขาดออกซิเจนในทารกแรกเกิดมีชีพ 1,000 คน', 'url' => ['#']],
                                    ['label' => 'รายงานจำนวนทารกแรกเกิดมีชีพ แยกกลุ่มน้ำหนัก', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละของเด็กที่มีพัฒนาการสมวัย', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละของเด็กตั้งแต่แรกเกิดจนถึง 6 เดือน กินนมแม่อย่างเดียว', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละของเด็กอายุ 1 ปี ได้รับวัคซีนโรคหัด', 'url' => ['#']],
                                    ['label' => 'รายงานลดอัตราการเสียชีวิตของทารกอายุต่ำกว่า 28 วัน', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละเด็กอายุ 9,18,30,42  เดือน ได้รับการคัดกรองพัฒนาการ', 'url' => ['#']],
                                    ['label' => 'รายงานเด็กเกิดน้ำหนักต่ำกว่า 2,500 กรัม', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละหญิงตั้งครรภ์ได้รับยาเม็ดไอโอดีน ประชากรในพื้นที่รับผิดชอบ', 'url' => ['#']],
                                    ['label' => 'รายงานจำนวนมารดาที่คลอดทั้งหมด', 'url' => ['#']],
                                    ['label' => 'รายงานจำนวนมารดาที่คลอดทั้งหมดในหน่วยบริการที่รับผิดชอบ', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละของหญิงหลังคลอดได้รับการดูแลครบ 3 ครั้งตามเกณฑ์', 'url' => ['#']],
                                    ['label' => 'รายงานหญิงตังครรภ์ที่ได้รับวัคซีนป้องกันบาดทะยักตามเกณฑ์', 'url' => ['#']],
                                    ['label' => 'รายงานการคัดกรองหญิงตั้งครรภ์', 'url' => ['#']],
                                    ['label' => 'รายงานอัตราการคลอดมีชีพในหญิงอายุ 15-19 ปี', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละหญิงตั้งครรภ์ที่มาฝากครรภ์ครั้งแรกก่อน 12 สัปดาห์', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละหญิงตั้งครรภ์ได้รับการฝากครรภ์ครบ 5 ครั้งตามเกณฑ์', 'url' => ['#']],
                                    ['label' => 'อัตราส่วนการตายมารดาต่อการเกิดมีชีพแสนคน', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละหญิงตั้งครรภ์ได้รับยาเม็ดไอโอดีน ภาระงาน', 'url' => ['#']],
                                ]],
                            '<li class="divider"></li>',
                            ['label' => 'กลุ่มเด็กวัยเรียน (5-14 ปี)', 'items' => [
                                    ['label' => 'รายงานร้อยละของเด็กช่วงอายุ 6 - 18 ปี ที่มีส่วนสูงตามเกณฑ์ ค่อนข้างสูง สูงกว่าเกณฑ์รวมกัน (ส่วนสูงต่ออายุ)', 'url' => ['#']],
                                    ['label' => 'รายงานจำนวนของเด็กช่วงอายุ 6 - 18  ปี ที่มีรูปร่างสมส่วน (น้ำหนักต่อส่วนสูง)', 'url' => ['#']],
                                    ['label' => 'รายงานจำนวนของเด็กช่วงอายุ 6 - 18 ปี ที่มีส่วนสูงระดับดีและรูปร่างสมส่วน (ภาวะการเจริญเติบโตดี)', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละเด็กวัยเรียน 6 - 14 ปี มีภาวะเริ่มอ้วนและอ้วน (น้ำหนักต่อส่วนสูง)', 'url' => ['#']],
                                    ['label' => 'รายงานอัตราการเสียชีวิตจากการจมน้ำของเด็กอายุต่ำกว่า 15 ปี', 'url' => ['#']],
                                    ['label' => 'รายงานการได้รับการตรวจสุขภาพช่องปากเด็ก ป.1', 'url' => ['#']],
                                    ['label' => 'รายงานการได้รับการเคลือบหลุมร่องฟันเด็ก ป. 1', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละการตั้งครรภ์ซ้ำในวัยรุ่น', 'url' => ['#']],
                                    ['label' => 'รายงานร้อยละของเด็กวัยเรียน  6 - 14 ปี มีส่วนสูงระดับดีและรูปร่างสมส่วน', 'url' => ['#']],
                                    ['label' => 'รายงานเด็ก ป. 1 ได้รับการตรวจวัดสายตาและการได้ยิน กรณีที่เด็กมีปัญหาต้องได้รับการช่วยเหลือแก้ไข', 'url' => ['#']],
                                    ['label' => 'เด็กไทยกลุ่มเสี่ยงได้รับการคัดกรองพัฒนาการและเด็กที่พบพัฒนาการสงสัยล่าช้าได้รับการส่งต่อ ร้อยละ 100', 'url' => ['#']],
                                    ['label' => 'เด็กไทยกลุ่มปรกติได้รับการคัดกรองพัฒนาการและเด็กที่พบพัฒนาการสงสัยล่าช้าได้รับการส่งต่อ คัดกรอง ร้อยละ 90 ส่งต่อร้อยละ  100', 'url' => ['#']],
                                    ['label' => 'เด็กไทยมีความฉลาดทางสติปัญญาเฉลี่ยไม่น้อยกว่า 100', 'url' => ['#']],
                                    ['label' => 'อัตราเข้าถึงบริการผู้ป่วยจิตเวชเด็ก - เด็กออทิส ร้อยละ  20', 'url' => ['#']],
                                    ['label' => 'อัตราเข้าถึงบริการผู้ป่วยจิตเวชเด็ก - อัตราเข้าถึงบริการผู้ป่วย ADHD ร้อยละ 15', 'url' => ['#']],
                                    ['label' => 'อัตราเข้าถึงบริการผู้ป่วยจิตเวชเด็ก - อัตราเข้าถึงบริการผู้ป่วย LD ร้อยละ 20', 'url' => ['#']],
                                    ['label' => 'อัตราเข้าถึงบริการผู้ป่วยจิตเวชเด็ก - อัตราเข้าถึงบริการผู้ป่วย LD ร้อยละ 15', 'url' => ['#']],
                                ]],
                            '<li class="divider"></li>',
                            ['label' => 'กลุ่มเด็กวัยรุ่น/นักศึกษา (15-21 ปี)', 'items' => [
                                    ['label' => 'ร้อยละของการตั้งครรภ์ซ้ำในวัยรุ่นอายุ 15-19 ปี', 'url' => ['#']]
                                ]],
                            '<li class="divider"></li>',
                            ['label' => 'กลุ่มวัยทำงาน (15-59 ปี)', 'url' => ['#']],
                            '<li class="divider"></li>',
                            ['label' => 'กลุ่มผู้สูงอายุ (60 ปีขึ้นไป) และผู้พิการ', 'items' => [
                                    ['label' => 'NCD Link', 'url' => ['#']]
                                ]],
                        ]
                    ],
                    ['label' => 'พัฒนาระบบจัดบริการที่มีคุณภาพมาตรฐานครอบคลุมประชาชนสามารถเข้าถึงบริการได้', 'items' => [
                            ['label' => 'ระบบปฐมภูมิ', 'url' => ['#']],
                        '<li class="divider"></li>',
                            ['label' => 'ระบบควบคุมโรค', 'items' => [
                                    ['label' => 'รายงานกลุ่มโรค 506', 'url' => ['#']],
                                    ['label' => 'รายงานกลุ่มโรค 506 (สรุป)', 'url' => ['#']],
                                    ['label' => 'รายงานการได้รับวัคซีน (นับเป็นคน)', 'url' => ['#']],
                                    ['label' => 'ร้อยละความครอบคลุมของเด็กอายุ 0-5 ปี ได้รับวัคซีนครบตามเกณฑ์', 'url' => ['#']],
                                    ['label' => 'ร้อยละการประเมินคุณภาพการได้รับวัคซีนครบตามเกณฑ์ของเด็กอายุ 0-5 ปี', 'url' => ['#']],
                                    ['label' => 'รายงานหญิงตั้งครรภ์ที่ได้รับวัคซีนป้องกันบาดทะยังตามเกณฑ์', 'url' => ['#']],
                                    ['label' => 'รายงานประชากรอายุ 20 - 50 ปี ได้รับการฉีดวัคซีน dTC', 'url' => ['#']],
                                    ['label' => 'รายงานประชากรที่ได้รับการฉีดวัคซีน ไข้หวัดใหญ่', 'url' => ['#']],
                                    ['label' => 'รายงานการคัดกรองโรคติดต่อทางเพศสัมพันธ์', 'url' => ['#']],
                                ]],
                            '<li class="divider"></li>',
                            ['label' => 'ระบบการคุ้มครองผู้บริโภคด้านบริการ อาหารและผลิตภัณฑ์สุขโภค', 'url' => ['#']],
                            '<li class="divider"></li>',
                            ['label' => 'การป้องกันและบำบัดรักษายาเสพติด', 'url' => ['#']],
                            '<li class="divider"></li>',
                            ['label' => 'การบังคับใช้กฏหมาย', 'url' => ['#']],
                            '<li class="divider"></li>',
                            ['label' => 'สิ่งแวดล้อมและสุขภาพ', 'url' => ['#']],
                            '<li class="divider"></li>',
                            ['label' => 'สุขศึกษาและประชาสัมพันธ์', 'url' => ['#']],
                            '<li class="divider"></li>',
                            ['label' => 'ระบบบริการทุติยภูมิ และ ตติยภูมิ', 'items' => [
                                    ['label' => 'Sepsis', 'items' => [
                                            ['label' => 'อัตราการเสียชีวิตของผู้ป่วย Sepsis', 'url' => ['#']]
                                        ]],
                                '<li class="divider"></li>',
                                    ['label' => 'Stoke', 'items' => [
                                            ['label' => 'ผู้ป่วยโรคหลอดเลือดสมองตีบหรืออุดตัน ได้รับยาฉีดละลายลิ่มเลือดทางหลอดเลือดดำ'],
                                            ['label' => 'ผู้ป่วย Stoke Fast Track ได้รับยาละลายลิ่มเลือดทางหลอดเลือดดำ (ภายใน 4.3 ชั่วโมง)', 'url' => ['#']],
                                            ['label' => 'ระยะเวลาเฉลี่ยในการให้การรักษาด้วยยาละลายลิ่มเลือด (rt-PA) ทางหลอดเลือดดำ (Door to Needle Time)', 'url' => ['#']],
                                            ['label' => 'ผู้ป่วยโรคหลอดเลือดสมองตีบหรืออุดตันเฉียบพลันได้รับยาละลายลิ่มเลือดทางหลอดเลือดดำภายในเวลา 60 นาที', 'url' => ['#']],
                                            ['label' => 'ผู้ป่วยโรคหลอดเลือดสมองตีบหรืออุดตันที่ได้รับยา Antiplatelet ภายใน 48 ชั่วโมง หลังเกิดอาการ', 'url' => ['#']],
                                            ['label' => 'ผู้ป่วยโรคหลอดเลือดสมองตีบหรืออุดตันมาถึงโรงพยาบาลภายใน 4 ชั่วโมง 30 นาที หลังมีอาการ', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'มะเร็ง', 'items' => [
                                            ['label' => 'อัตราตายจากโรคมะเร็งตับ', 'url' => ['#']],
                                            ['label' => 'สัดส่วนของผู้ป่วยมะเร็งเต้านมและมะเร็งปากมดลูก ระยะที่ 1  และ 2 รวมกัน ไม่น้อยกว่าร้อยละ 70', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้ป่วยมะเร็ง ที่มีระยะเวลาการรอคอยรการรักษาด้วยรังสี <= 6 สัปดาห์', 'url' => ['#']],
                                            ['label' => 'ระดับความสำเร็จของการดำเนินการตามมาตรฐานของสถานบริการสุขภาพในแผนพัฒนาระบบบริการสุขภาพ สาขามะเร็ง แต่ละระดับของโรงพยาบาล', 'url' => ['#']],
                                            ['label' => 'ร้อยละของการจัดกิจกรรมตามแผนป้องกันและรณรงค์ เพื่อหลีกเลี่ยงปัจจัยเสี่ยงต่อโรคมะเร็ง อย่างชัดเจน', 'url' => ['#']],
                                            ['label' => 'ร้อยละของประชากรสตรีกลุ่มเป้าหมาย ได้รับการคัดกรองมะเร็งเต้านม และ มะเร็งปากมดลูก', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้ป่วยที่ได้รับการวินิจฉัยทางพยาธิวิทยา <= 2 สัปดาห์', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้ป่วยที่ Refer ออกนอกเขตสุขภาพ เพื่อทำการตรวจวินิจฉัยโรคมะเร็ง (Cancer Diagnosis)', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้ป่วยที่ได้รับการรักษาหลักภายในเกณฑ์เวลาที่กำหนด', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้ป่วยที่ Refer ออกนอกเขตสุขภาพ เพื่อทำการรักษาโรคมะเร็ง (Cancer Treatment)', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้ป่วยมะเร็งระยะสุดท้าย ได้รับการดูแลแบบประคับประคอง (Pallitive Care)', 'url' => ['#']],
                                            ['label' => 'ระดับความสำเร็จของการดำเนินการจัดการระบบสนับสนุนการดูแลผู้ป่วยระยะสุดท้าย', 'url' => ['#']],
                                            ['label' => 'ระดับความสำเร็จของการทำทะเบียนมะเร็ง (Cancer Registry)', 'url' => ['#']],
                                            ['label' => 'ระดับความสำเร็จของการจัดตั้ง Research Center และ ผลิตผลงานวิจัย', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'หัวใจ', 'items' => [
                                            ['label' => 'ระยะเวลารอผ่าตัดลดลง', 'url' => ['#']],
                                            ['label' => 'ร้อยละของโรงพยาบาล A-S ที่มี Heart Failure', 'url' => ['#']],
                                            ['label' => 'จำนวนผู้ป่วยหัวใจล้มเหลวใน Heart Failure Clinic', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'Nstemi', 'items' => [
                                            ['label' => 'อัตราตายในโรงพยาบาลของผู้ป่วย NSTEMI/Unstatle Angina', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้ป่วย NSTEMI ที่ได้รับการทำ Echocardiogram', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้ป่วย NSTEMI ที่ได้รับการทำการตรวจสวนหัวใจ', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'Warfarin', 'items' => [
                                            ['label' => 'ร้อยละของโรงพยาบาล A-F2 (66 รพ.) ที่มี Warfarin Clinic', 'url' => ['#']],
                                            ['label' => 'ร้อยละผู้ป่วยที่ได้รับยาต้านการแข็งตัวของเลือด (Warfarin) ได้ target INR', 'url' => ['#']],
                                            ['label' => 'ร้อยละ Stoke rate in Warfarin Clinic ลดลง', 'url' => ['#']],
                                            ['label' => 'ร้อยละ Major bleeding from Warfarin Clinic ลดลง', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'ทารกแรกเกิด', 'items' => [
                                            ['label' => 'อัตราการเสียชีวิตของทารกแรกเกิดอายุต่ำกว่า 28 วัน', 'url' => ['#']],
                                            ['label' => 'สัดส่วนเตียง NICU ทารกแรกเกิด', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => '5 สาขาหลัก', 'items' => [
                                            ['label' => 'การส่งต่อผู้ป่วย 5 สาขาหลักจาก รพช. แม่ข่าย (Node) Refer Out ไป รพศ. รพท. ลดลง', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'Stemi', 'items' => [
                                            ['label' => 'ร้อยละของผู้ป่วยโรคหัวใจขาดเลือดชนิด STEMI ที่มีเกณฑ์ในการให้ยาละลายลิ่มเลือดและได้รับยาละลายลิ่มเลือด', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้ป่วยโรคหัวใจขาดเลือดชนิด STEMI ที่มีเกณฑ์', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้ป่วยโรคหัวใจขาดเลือดชนิด STEMI ที่ได้รับการวินิจฉัย ดูและและส่งต่อเพื่อมารับการขยายหลอดเลือดหัวใจและได้รับการขยายหลอดเลือดหัวใจด้วยบอลลูนและใส่ขดลวดค้ำยัน (PCI)', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'ส่งต่อ', 'items' => [
                                            ['label' => 'จำนวนการส่งต่อผู้ป่วยออกนอกเขตสุขภาพลดลง ร้อยละ 50 ในภาพรวมจังหวัด / เขต']
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'ไต', 'items' => [
                                            ['label' => 'ร้อยละของผู้ป่วยโรคไตเรื้อรังที่มีการลดลงของ eGFR<4มล./นาที/1.73 ม.2/ปี', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'สูติ', 'items' => [
                                            ['label' => 'การตายของมารดา Materal Mortality Ratio / MMR', 'url' => ['#']],
                                            ['label' => 'ร้อยละของหญิงมีครรภ์ได้รับการฝากครรภ์ครั้งแรกก่อน 12 สัปดาห์', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'สุขภาพจิต ', 'items' => [
                                            ['label' => 'อัตราการเข้าถึงบริการของผู้ป่วยโรคจิต', 'url' => ['#']],
                                            ['label' => 'อัตราการเข้าถึงบริการของผู้ป่วยออทิสติก', 'url' => ['#']],
                                            ['label' => 'อัตราการเข้าถึงบริการผู้ป่วย ADHD', 'url' => ['#']],
                                            ['label' => 'อัตราการเข้าถึงบริการผู้ป่วยโรคซึมเศร้า', 'url' => ['#']],
                                            ['label' => 'อัตราการเข้าถึงบริการผู้ป่วยโรค LD', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'ตา', 'items' => [
                                            ['label' => 'ร้อยละของประชาชนอายุ 60 ปีขึ้นไปที่ได้รับการคัดกรองสายตา', 'url' => ['#']],
                                            ['label' => 'การผ่าตัดต้อกระจกชนิดบอดภายใน 30 วัน มากกว่าร้อยละ 80', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้ป่วยเบาหวานได้รับการคัดกรองเบาหวานเข้าจอประสาทตา', 'url' => ['#']],
                                            ['label' => 'ร้อยละการส่งต่อโรคทางจักษุไปรักษานอกเขตลดลง', 'url' => ['#']],
                                        ]],
                                    '<li class="divider"></li>',
                                    ['label' => 'อุบัติเหตุ', 'items' => [
                                            ['label' => 'อัตราตายจากอุบัติเหตุทางถนน ต่อแสนประชากร (รหัส ICD-10-TM = V01-V89)', 'url' => ['#']],
                                            ['label' => 'อัตราตายผู้ป่วยบาดเจ็บต่อสมองลดลง (Fatality Rate) (รหัส ICD S06.0 - S06.9)', 'url' => ['#']],
                                            ['label' => 'ร้อยละของผู้รอดชีวิตจากอุบัติทางถนนที่รับไว้รักษาในโรงพยาบาลระดับ A,S,M1 ที่มีค่าโอกาสรอด Probability of Survival (Ps) > 0.75', 'url' => ['#']],
                                            ['label' => 'อัตราตายผู้ป่วยบาดเจ็บภายใน 3 วัน', 'url' => ['#']],
                                            ['label' => 'อัตราตายผู้ป่วยบาดเจ็บหลายระบบ', 'url' => ['#']],
                                        ]]
                                ]]
                        ]],
                    ['label' => 'พัฒนาระบบบริหารจัดการเพื่อสนับสนุนการจัดบริการ', 'items' => [
                            ['label' => 'การพัฒนาบุคลากร', 'url' => ['#']],
                            '<li class="divider"></li>',
                            ['label' => 'การบริหารงบลงทุน', 'items' => [
                                    ['label' => 'Link สบรส.', 'url' => ['#']]
                                ]],
                            '<li class="divider"></li>',
                            ['label' => 'การบริหารยาและเวชภัณฑ์ พัสดุ', 'url' => ['#']],
                            '<li class="divider"></li>',
                            ['label' => 'ธรรมาภิบาล', 'url' => ['#']],
                        ]],
                ],
            ]);


            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; มุกศรีโสธรเจริญราชธานี <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
