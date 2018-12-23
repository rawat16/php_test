
<!DOCTYPE html>
<html>
<head>
<title>Accesscontrol management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="เว็ปไซต์ที่จะ่วยให้การสรุปสิทธิ์ผู้ใช้ผ่านประตูง่ายขึ้น  ">
  <meta name="keywords" content="Accesscontrol management">
  <meta name="author" content="Ray">

   <style type="text/css">
     #imgfooter img:hover{
         opacity: 0.6;
     }
   </style>

  <?php  
   require "view/include_css_js/css_index.php"; //css and js
   require "view/include_css_js/css_template_index.php"; // css template
  ?>


</head>
<body > 

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white " id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button"><h4><font color="black"><b> หน้าหลัก </b></font></h4></a>
    <a href="view/page/faq.php" class="w3-bar-item w3-button w3-hide-small w3-right "><h4><font color="black"><b> คำถามที่พบบ่อย</b></font></h4></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
     <a href="view/page/faq.php" class="w3-bar-item w3-button" onclick="toggleFunction()">คำถามที่พบบ่อย</a>
   </div>
</div>
<!-- Navbar (sit on top) -->

  

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <div style="padding: 10px 40px; background-color: white; border-radius: 25px; border: 2px solid #339933; width: 350px;">
        <form name="userenter" method="post"  action="control/uploadfile/upload.php" style=" color: black;" enctype="multipart/form-data" >
          
             <br>
              <h2 style="margin-top: -28px; margin-left: 118px;"><b style="color:  #ff0000;">A</b><b style="color:  #ff9900;">M</b></h2> </br>    
            
             <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary"> ไฟล์ 1
                      <i class="fa fa-folder-open-o"></i><input type="file" style="display: none;" multiple name="file1" required  accept=".xls,.xlsx" id="file"  onchange="handleFiles(this.files)"> 
                         
                    </span>
                </label> 
                <input type="text" class="form-control" disabled style="width: 187px;" id="textfile">
            </div><br/>
           
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">ไฟล์ 2
                      <i class="fa fa-folder-open-o"></i><input type="file" style="display: none;" multiple name="file2" required  accept=".xls,.xlsx" id="file"  onchange="handleFiles(this.files)"> 
                         
                    </span>
                </label> 
                <input type="text" class="form-control" disabled style="width: 187px;" id="textfile">
            </div>
            <br/>
               
          <div style="margin-left: 160px;">
            <button  type="submit" class = "btn btn-success" >ตกลง</button>
            <button  type="reset" class = "btn btn-danger" id ="reset">ยกเลิก</button>
        </div>
     <!--<span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span> -->
      </form>
       <br/>      
      </div>
  </div>
</div>




<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <p>Powered by <a href="#" title="W3.CSS" target="_blank" class="w3-hover-text-green">CWN Network Engineering</a></p>
</footer>
 
   <?php  
   require "view/include_css_js/js_index.php"; //css and js
   require "view/include_css_js/js_template.php"; // js template
  ?>
</body>



<script type="text/javascript">
  $(function() {
  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    
    var input = $(this);
   
        numFiles = input.get(0).files ? input.get(0).files.length : 1;       
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');

        //if(numFiles==1) {
        input.trigger('fileselect', [numFiles, label]); 
     //  }
   
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
    
      $(':file').on('fileselect', function(event, numFiles, label) {
           
        var input = $(this).parents('.input-group').find(':text');
              
          log = numFiles > 1 ? numFiles + ' files selected' : label;
          
          if( input.length ) {
              input.val(log);
          } else {
              if(log) alert(log);
          }
             
      

      });
  });
  
});
</script>

<script type="text/javascript">
  $(document).ready(function() {

     $("#file").change(function() {

     var filename = $('input[type=file]').val().replace(/.*(\/|\\)/, ''); //เก็บชื่อ
    
     
     if(filename!="") {  
     
      var ext = filename.split(".");
       ext = ext[ext.length-1].toLowerCase();      
       var arrayExtensions = ["xls","xlsx"];

        if (arrayExtensions.lastIndexOf(ext) == -1) { //ถ้าไม่ใช่ไฟล์ csv ให้แจ้งเตือน
           alert("รองรับได้เฉพาะไฟล์ xls,xlsx"); //แจ้งเตือน
           $("#file").val(""); //ล้างค่าไฟล์อินพุท
           $("#ou").hide(); //ซ่อนฟังก์ชั่นให้เลือกกด
        }
        else{    
         $("#ou").show();//โชว์ฟังก์ชั่นให้เลือกกด
        } 
     }
     else{
         //     
          $("#ou").hide(); //ซ่อนฟังก์ชั่นให้เลือกกด     
     }

    });   
  });
</script>

<script type="text/javascript"> //ลบฟังก์ชั่นให้เริ่มพยากรณ์ออก
 $(document).ready(function() { 
    $("#reset").click(function() {   
       $("#output").html("");
       $("#output1").html("");
    });   
 });  
</script>

</html>
