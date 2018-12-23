<?php
session_start();
include '../../control/function/function.inc.php';
include '../../control/excelreader/reader.php';

$a = $_FILES['file1'];
$b = $_FILES['file2'];

$name1 = "a.xls";
$name2 = "b.xls";

// echo $a['name'];


if(!empty($a) && !empty($b))
  {
   upload($a,$name1);  //อัพโหลดไฟล์ใหม่
   upload($b,$name2);  //อัพโหลดไฟล์เก่า


   $excel1 = new Spreadsheet_Excel_Reader();  //เริ่มการอ่าน XLS a.xls
   $excel1->setOutputEncoding('utf-8');
   $excel1->read('../../public/storagefile/a.xls');

   $excel2 = new Spreadsheet_Excel_Reader();  //เริ่มการอ่าน XLS b.xls
   $excel2->setOutputEncoding('utf-8');
   $excel2->read('../../public/storagefile/b.xls');

   $data1 = readfileXLS($excel1); //ดึงข้อมูลจากไฟล์ใหม่
   $data2 = readfileXLS($excel2); //ดึงข้อมูลจากไฟล์เก่า

   $size1 =  sizeof($data1);
   $size2 =  sizeof($data2);


   
   if( !( ($size1 >0 ) && ($size2 >0 ))){ //ตรวจสอบไฟล์ว่ามีข้อมูลไหม
    deletefile();
    echo("<script> alert('ไฟล์ไม่มีข้อมูล'); window.location='../../index.php';</script>");
   }
  
   if($data1[0][0] !="Employee ID" && $data1[0][0] != "Card Number" ){ //ตรวจสอบไฟล์ว่าถูกต้องไหม
    deletefile();
    echo("<script> alert('โปรดอัพโหลดไฟล์ให้ถูกต้อง'); window.location='../../index.php';</script>");
   }

   $date1 = readdate($excel1); //ดึงข้อมูลจากไฟล์ใหม่
   $date2 = readdate($excel2); //ดึงข้อมูลจากไฟล์เก่า
    
   $date1 =  caldate($date1[0][1]); //วันที่ของไฟล์ใหม่
   $date2 =  caldate($date2[0][1]); //วันที่ของไฟล์เก่า
    
   if($date1==$date2){
    deletefile();
    echo("<script> alert('ไฟล์ที่อัพโหลดเป็นไฟล์เดียวกัน'); window.location='../../index.php';</script>");
   }
   else if($date2 > $date1){ //กันการอัพโหลดไฟล์ใหม่และไฟล์เก่าไม่ตรงอันดับกัน
     $t= $data1;
     $data1 = $data2;
     $data2 = $t;
     // echo "string";
   }
   
   $notchnge = findnotchange($data1,$data2); // หาผู้มีสิทธิ์ไม่เปลี่ยนแปลง  (ไฟล์ใหม่ , ไฟล์เก่า)
   $add = findnew_findold($data1); //  หาผู้เพิ่มสิทธิ์  (ไฟล์ใหม่)
   $delete = findnew_findold($data2); //  หาผู้ถูกยกเลิกสิทธิ์  (ไฟล์เก่า)
   deletefile(); //ลบไฟล์ทิ้ง
  
   $_SESSION["ok"] = "ok";
   $_SESSION["notchnge"] = $notchnge;
   $_SESSION["add"] = $add;
   $_SESSION["delete"] = $delete;

   header("location:../../view/page/show.php");

   
  }
  else{
  echo("<script> alert('โปรดอัพโหลดไฟล์ก่อนครับ'); window.location='../../index.php';</script>");	
  }

?>