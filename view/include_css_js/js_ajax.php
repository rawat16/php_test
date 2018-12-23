<script> // ไว้ส่งกดส่งค่าแบบไม่โหลดหน้า-ของหน้าตารางแสดงรายละเอียดแบบสำรวจ
  $(document).ready(function(){
      $("#analyseBtn").click(function(){
        var predicId = $("#predicOPtion").val();
        $.post("../../controll/getset_value/info_survey.php",
        {
            id: predicId
        },
        function(data, status){
            $("#info").html(data);
          });
      });
  });
</script>

<script> // ไว้ส่งกดส่งค่าแบบไม่โหลดหน้า-ของหน้าตารางแสดงข้อมูล
  $(document).ready(function(){
      $("#analyseBtn").click(function(){
        var predicId = $("#predicOPtion").val();
        $.post("../../controll/getset_value/call_weka_get_result.php",
        {
            id: predicId
        },
        function(data, status){
           $("#table").html(data);
         });
      });
  });
</script>

<script> // ไว้ส่งกดส่งค่าแบบไม่โหลดหน้า-ของหน้าแสดงกราฟ
  $(document).ready(function(){
      $("#analyseBtn").click(function(){
        var predicId = $("#predicOPtion").val();
        $.post("../../controll/getset_value/ipa_graph.php",
        {
            id: predicId
        },

        function(data, status){
          //alert(data);
            //$("#ipa").empty();
            $("#ipa").html(data);
          });
      });
  });
</script>