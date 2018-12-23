<?php
session_start();
  if (!isset($_SESSION["ok"]))  { 
       echo("<script> alert('โปรดอัพโหลดไฟล์ก่อนครับ'); window.location='../../index.php';</script>");
   }

   $namecolumn = $_SESSION["notchnge"];   
   $add = $_SESSION["add"];    
   $delete = $_SESSION["delete"];  

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

 

  <?php  
   require "../../view/include_css_js/css_show.php"; //css and js
   //require "../../view/include_css_js/css_index.php"; //css and js
   require "../../view/include_css_js/css_template.php"; // css template
  ?>

   <style type="text/css">
     #imgfooter img:hover{
         opacity: 0.6;
     }
   </style>


</head>
<body class="bgimg-1 "> 

 <?php  
   require "../../view/include_html/header.php"; //css and js
 ?>
 </br></br>
 

  
   </br> <section style="text-align: center; ">
     <h1><font color="black">ระบบตรวจสอบสิทธิ์ผู้ใช้ตามประตู</font></h1>
  </section> </br> 

  <section style="text-align: center;margin: auto; max-width: 700px;">

   <?php if(sizeof($namecolumn)>0 ) { ?>
   <h3 style="float: left;">สิทธิ์ไม่เปลี่ยนแปลง</h3>
   <table  id="myTable"  class="w3-table w3-bordered w3-striped w3-border test w3-hoverable">
      <thead>
        <tr class="w3-green">
          <th onclick="selectTable(0)">ลำดับ</th>
          <th onclick="selectTable(1)">Employee ID</th>
          <th onclick="selectTable(2)">Card Number</th>
          <th onclick="selectTable(3)">Employee Name</th>
          <th onclick="selectTable(4)">Department</th>
          <th onclick="selectTable(5)">Company</th>
        </tr>
      </thead>
      <?php   
      $i=0;
      $n=1;
      while ($i < sizeof($namecolumn)) {
     
      ?>
      <tr>
        <td style="color: black;"><?=$n++;?></td>
        <td style="color: black;"><?=$namecolumn[$i][0];?></td>
        <td style="color: black;"><?=$namecolumn[$i][1];?></td>
        <td style="color: black;"><?=$namecolumn[$i][2];?></td>
        <td style="color: black;"><?=$namecolumn[$i][3];?></td>
        <td style="color: black;"><?=$namecolumn[$i][4];?></td>
      </tr>
     <?php  $i++;} ?>
    </table>
   <?php }else{ ?>
    <br/><br/><br/>
    <h4 style="float: left; color: blue;">ไม่มีข้อมูล</h4>
   <?php } ?>


 <br/>
  <h3 style="float: left;">เพิ่มสิทธิ์</h3>
  <?php if(sizeof($add)>0 ) { ?>
   <table id="myTable2"  class="w3-table w3-bordered w3-striped w3-border test w3-hoverable">
      <thead>
        <tr class="w3-green">
          <th onclick="selectTable2(0)">ลำดับ</th>
          <th onclick="selectTable2(1)">Employee ID</th>
          <th onclick="selectTable2(2)">Card Number</th>
          <th onclick="selectTable2(3)">Employee Name</th>
          <th onclick="selectTable2(4)">Department</th>
          <th onclick="selectTable2(5)">Company</th>
        </tr>
      </thead>
     <?php   
      $j=0;
      $n=1;
      while ($j < sizeof($add)) {
      ?>
      <tr>
        <td style="color: black;"><?=$n++;?></td>
        <td style="color: black;"><?=$add[$j][0];?></td>
        <td style="color: black;"><?=$add[$j][1];?></td>
        <td style="color: black;"><?=$add[$j][2];?></td>
        <td style="color: black;"><?=$add[$j][3];?></td>
        <td style="color: black;"><?=$add[$j][4];?></td>
      </tr>
      <?php  $j++;} ?>
  </table>
  <?php }else{ ?>
    <br/><br/><br/>
    <h4 style="float: left; color: blue;">ไม่มีการเพิ่มสิทธิ์</h4>
   <?php } ?>


  <br/><br/>
  <h3 style="float: left;">ยกเลิกสิทธิ์</h3>
   <?php if(sizeof($delete)>0 ) { ?>
   <table id="myTable3" class="w3-table w3-bordered w3-striped w3-border test w3-hoverable">
      <thead>
        <tr class="w3-green">
          <th onclick="selectTable3(0)">ลำดับ</th>
          <th onclick="selectTable3(1)">Employee ID</th>
          <th onclick="selectTable3(2)">Card Number</th>
          <th onclick="selectTable3(3)">Employee Name</th>
          <th onclick="selectTable3(4)">Department</th>
          <th onclick="selectTable3(5)">Company</th>
        </tr>
      </thead>
     <?php   
      $k=0;
      $n=1;
      while ($k < sizeof($delete)) {
      ?>
      <tr>
        <td style="color: black;"><?=$n++;?></td>
        <td style="color: black;"><?=$delete[$k][0];?></td>
        <td style="color: black;"><?=$delete[$k][1];?></td>
        <td style="color: black;"><?=$delete[$k][2];?></td>
        <td style="color: black;"><?=$delete[$k][3];?></td>
        <td style="color: black;"><?=$delete[$k][4];?></td>
      </tr>
     <?php  $k++;} ?>
  </table>
  <?php }else{ ?>
    <br/><br/><br/>
    <h4 style="float: left; color: blue;">ไม่มีการยกเลิกสิทธิ์</h4>
   <?php } ?>




  </section>

</br> 
  




    </br></br></br></br></br></br></br></br></br>
    </br></br></br></br>    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <p>Powered by <a href="#" title="W3.CSS" target="_blank" class="w3-hover-text-green">CWN Network Engineering</a></p>
</footer>
     


  <?php  
   require "../../view/include_css_js/js_show.php"; //css and js
  
   require "../../view/include_css_js/js_template.php"; // js template
   require "../../view/include_css_js/js_ajax.php"; // js ajax
  ?>
  
<script type="text/javascript">
 function selectTable(n) {       //จัดเรียงตาราง สิทธิ์คงที่
  
  var table = document.getElementById("myTable");
  sortTable(table,n);

}

 function selectTable2(n) {       //จัดเรียงตาราง เพิ่มสิทธิ์
  
  var table = document.getElementById("myTable2");
  sortTable(table,n);

}

 function selectTable3(n) {       //จัดเรียงตาราง ยกเลิกสิทธิ์
  
  var table = document.getElementById("myTable3");
  sortTable(table,n);

}


function sortTable(table,n){  //sortTable
 var  rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>


</body>
</html>

