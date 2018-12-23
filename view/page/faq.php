<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Accesscontrol management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="เว็ปไซต์ที่จะ่วยให้การสรุปสิทธิ์ผู้ใช้ผ่านประตูง่ายขึ้น  ">
  <meta name="keywords" content="Accesscontrol management">
  <meta name="author" content="Ray">


<script src="../../public/asset/js/jquery.min.js"></script> 
<script src="../../public/asset/js/bootstrap1.min.js"></script> 
 
  <?php  
   require_once "../../view/include_css_js/css_show.php";
   require "../../view/include_css_js/css_template.php"; // css template
    ?>

   <style type="text/css">
     #imgfooter img:hover{
         opacity: 0.6;
     }
   </style>


</head>
<body class="bgimg-1 " > 

   <?php  
     require "../../view/include_html/header.php"; //css and js
    ?>
   </br></br></br></br>


     </br> <section style="text-align: center; ">
       <h1><font color="black">คำถามที่พบบ่อย</font></h1>
    </section> </br> 


<div class="container">
<div id="accordion">

  <h2>1. เว็ปนี้ใช้ทำอะไร</h2>
  <div>
    <p>
   ใช้ตรวจสอบผู้มีสิทธิ์เข้า-ออกประตู โดยจะแสดงผู้มีสิทธิ์ไม่เปลี่ยนแปลง ผู้ที่พึ่งได้รับการเพิ่มสิทธิ์ ผู้ถูกยกเลิกสิทธิ์
    </p>
  </div>

  <h2>2. ไฟล์ที่รองรับได้</h2>
  <div>
    <p>
    ไฟล์ XLS,XLSX ที่ Export จากโปรแกรม SAMS PRO
    </p>
  </div>

  <h2>3. ประเภทไฟล์ที่รองรับ</h2>
  <div>
    <p>
    XLS,XLSX
    </p>  
  </div>

  <h2>4. วิธีการใช้งาน</h2>
  <div>
    <p>1. อัพโหลดไฟล์เก่า และไฟล์ใหม่ </p>
    <p>2. กดตกลง</p>
    <p>3. ระบบจะทำการประมวลผล และแสดงผลลัพธ์ในรูปแบบตาราง</p>
  
  </div>


</div>
</div>


    </br></br></br></br>

   <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <p>Powered by <a href="#" title="W3.CSS" target="_blank" class="w3-hover-text-green">CWN Network Engineering</a></p>
</footer>

     <?php  
    require_once "../../view/include_css_js/css_show.php";
    require "../../view/include_css_js/css_template.php"; // css template
     ?>

     <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $( function() {
        $( "#accordion" ).accordion();
      } );
      </script>





</body>
</html>
