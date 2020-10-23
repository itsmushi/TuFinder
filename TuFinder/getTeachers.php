<?php
session_start();
require_once("includes/db.php");
require_once("includes/functions.php");


$rowToStart=$_SESSION["rowToStart"];


$subjects = array("offsettedvalue" ,"math", "science","socialstudies", "arts", "businessstudies", "language","others");

if(!isset($_SESSION["email"])){
    $sql = "SELECT * FROM registration WHERE status='Tutor' LIMIT 6 OFFSET $rowToStart";
}else{
    $userEmail=$_SESSION["email"];
    if(isset($_SESSION["sts"])){//user now has selected to just filter whether parents or students only and he/she is a teacher  coz otherwise would not get that session[sts] 
      //also to prevent one who could just enter url and put the get parameter manually
    $st=$_SESSION["sts"];
$sql = "SELECT * FROM registration WHERE status='$st' AND email !='$userEmail' LIMIT 6 OFFSET $rowToStart";
}else{
    $sql = "SELECT * FROM registration WHERE status='Tutor' AND email !='$userEmail' LIMIT 6 OFFSET $rowToStart";
}
}





// if(!isset($_SESSION["email"])){
//   $sql = "SELECT * FROM registration WHERE status='Tutor' LIMIT 6 OFFSET 0";
// }else{//if user is logged in and is a teacher then dont display him in the list
  
//   $userEmail=$_SESSION["email"];
//   if(isset($_GET["st"]) && isset($_SESSION["sts"])){//user now has selected to just filter whether parents or students only and he/she is a teacher  coz otherwise would not get that session[sts] 
//                                                 //also to prevent one who could just enter url and put the get parameter manually
//     $st=$_GET["st"];
//     $sql = "SELECT * FROM registration WHERE status='$st' AND email !='$userEmail' LIMIT 6 OFFSET 0";
//   }else{
//     $sql = "SELECT * FROM registration WHERE status='Tutor' AND email !='$userEmail' LIMIT 6 OFFSET 0";
//   }
  
// }




//$sql = "SELECT * FROM registration WHERE status='Tutor' LIMIT 6 OFFSET $rowToStart";

$result = mysqli_query($conn, $sql);
confirm_query($result);
$finalText="";

while($row = mysqli_fetch_assoc($result)) {
  
    // $status= $row["status"];
  
  $html='  <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5';

  
  $arrSub=[$row["subject1"],$row["subject2"],$row["subject3"]];
  
  //for adding classes of subjects for easy search as we select particular subjects  of teachers
  for($i=0;$i<count($arrSub);++$i){
    $str=$arrSub[$i];
    $str = str_replace(' ', '', $str);
    $str=strtolower($str);
    
   if( array_search($str,$subjects,true) ){
    $html.=' ';
    $html.="{$str}";
     
   }
  }

  $arr=[];
  
  $html.=' "> ';
  $html.='
  <div class="card border-0 rounded-0 hover-shadow">
  
  <img class="card-img-top rounded-0" src="';
 
  //profile picture issues 
  if($row["profilePicture"]==null){//profile picture  is not set display default picture
    $html.='images/teachers/profileDefault.png';
  }else{
        $html.=$row["profilePicture"];
      } 
                    
      

  $html.='" alt="teacher">
  <div class="card-body">

    <a href="teacher-single.php?k=';
    // k=<?php echo $row["email"]; 
    $html.="{$row["email"]}";
    $html.='" class=" ';
    if(!isset($_SESSION["email"])){
        $html.='link-disabled';
      }
    
    
   

      $html.='  ">
      <h4 class="card-title">';
      $html.= $row["status"];
      $html.='</h4> 
    </a>
    <p>';

    $html.= $row["name"];

    $html.='</p>
    
    <ul class="list-inline">';

      $html.=' <li class="list-inline-item">';
      $html.= $row["subject1"];  
      $html.='</li> ';

      $html.=' <li class="list-inline-item">';
      $html.= $row["subject2"];  
      $html.='</li> ';

      $html.=' <li class="list-inline-item">';
      $html.= $row["subject3"];  
      $html.='</li> ';


    $html.='</ul>
  </div>
</div>
</div>';
 
$finalText=$finalText.$html;
       
}

$_SESSION["rowToStart"]=$rowToStart+6;

echo $finalText;

?>