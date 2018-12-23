<?php


function upload($file,$name)
{
 
    $path = "../../public/storagefile/";
    $path = $path.$name;
    if(move_uploaded_file($file['tmp_name'], $path)) {
      //echo "The file ".  $name." has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }

  }

function readfileXLS($excel){

    $data = array();
	  $x=9;
    $a =0;
    $b =0;
    $buffer = [];

    while($x<=$excel->sheets[0]['numRows']) 
    {
          
      $y=1;
      while($y<=$excel->sheets[0]['numCols']) {
        $cell = isset($excel->sheets[0]['cells'][$x][$y]) ? $excel->sheets[0]['cells'][$x][$y] : '';
        if($cell != ""){
          $buffer[$b++] = $cell;
        }
           $y++;
        }  
      
        $b =0;
        if(sizeof($buffer) !=0){
         $data[$a++] = $buffer;
         $buffer = [];
        }
        $x++;
    }

     return($data);
}

function readdate($excel){

    $data = array();
	  $x=2;
    $a =0;
    $b =0;
    $buffer = [];

    while($x<=2) 
    {
          
      $y=1;
      while($y<=$excel->sheets[0]['numCols']) {
        $cell = isset($excel->sheets[0]['cells'][$x][$y]) ? $excel->sheets[0]['cells'][$x][$y] : '';
        if($cell != ""){
          $buffer[$b++] = $cell;
        }
           $y++;
        }  
      
        $b =0;
        if(sizeof($buffer) !=0){
         $data[$a++] = $buffer;
         $buffer = [];
        }
        $x++;
    }

     $a=  $a-1;
     return($data);
}

function caldate($date){

	return($date[6].$date[7].$date[8].$date[9].$date[3].$date[4].$date[0].$date[1].$date[11].$date[12].$date[14].$date[15].$date[17].$date[18]);
}

function findnotchange(&$data1,&$data2){ //ไฟล์ใหม่ ไฟล์เก่า
  $notchange = array();
  $buffer = [];
  $n = 0;
 
  $size_new = sizeof($data1)-1;
  $size_old = sizeof($data2)-1;

  for ($i=1; $i < $size_new; $i++) {
       
      for ($j=1; $j <$size_old ; $j++) { 
            if( $data1[$i][0]!="" && $data2[$j][0]!="" && ( strpos($data1[$i][0],"/")==0)  && ($data1[$i][0] == $data2[$j][0])){

              $buffer[0] = $data1[$i][0];       //id
              $buffer[1] = $data1[$i][1];     //card
              $buffer[2] = $data1[$i][2];     //nmae
              $buffer[3] = $data1[$i][3];  //company
              $buffer[4] = $data1[$i][4]; //department

              $data1[$i][5] = "n";
              $data2[$j][5] = "n";
              break;
          }
      }

     if(sizeof($buffer) !=0){
         $notchange[$n++] = $buffer;
         $buffer = [];
      } 

  }
  return($notchange);

}

function findnew_findold($data1){ //ไฟล์ใหม่ ไฟล์เก่า
  $add = array();
  $buffer = [];
  $n = 0;

  $size = sizeof($data1)-1;
  

    for ($i=1; $i < $size; $i++) {
      if( $data1[$i][0]!="" && ( strpos($data1[$i][0],"/")==0)  && $data1[$i][5]!="n"){

              $buffer[0] = $data1[$i][0];       //id
              $buffer[1] = $data1[$i][1];     //card
              $buffer[2] = $data1[$i][2];     //nmae
              $buffer[3] = $data1[$i][3];  //company
              $buffer[4] = $data1[$i][4]; //department

        }
        if(sizeof($buffer) !=0){
         $add[$n++] = $buffer;
         $buffer = [];
        } 
      }

  return($add);
}

function deletefile(){ //ลบไฟล์
  unlink('../../public/storagefile/a.xls');
  unlink('../../public/storagefile/b.xls');
}

?>