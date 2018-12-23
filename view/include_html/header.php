<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white " id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="../../view/include_html/logout.php" class="w3-bar-item w3-button"><h4><font color="black"><b> หน้าหลัก </b></font></h4></a>
	   
     <a href="../../view/page/faq.php" class="w3-bar-item w3-button w3-hide-small w3-right "><h4><font color="black"><b> คำถามที่พบบ่อย</b></font></h4></a>
       <?php   if (isset($_SESSION["ok"]))  { ?>
     <a href="../../view/page/show.php" class="w3-bar-item w3-button w3-hide-small w3-right "><h4><font color="black"><b> ตรวจสอบ</b></font></h4></a>
       <?php  }  ?>
   </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
       <?php   if (isset($_SESSION["ok"]))  { ?>
     <a href="../../view/page/show.php" class="w3-bar-item w3-button" onclick="toggleFunction()">ตรวจสอบ</a>
       <?php  }  ?>
     <a href="../../view/page/faq.php" class="w3-bar-item w3-button" onclick="toggleFunction()">คำถามที่พบบ่อย</a>
    </div>
</div>
