<?php
require_once('../../req/config.php');
session_start();
if(isset ($_POST["atarm"]) && isset ($_POST["atclass"]))
{
$stdoutput='';
 $xquery="select * from student_tab where current_class='".$_POST["atclass"]."' and current_arm='".$_POST["atarm"]."'";
 $output=mysqli_query($con,$xquery);
  if(mysqli_num_rows($output))
   {
	   echo "<option>Select</option>";
	   while($rows=mysqli_fetch_array($output))
	   {
									   $_SESSION['sid']=$rows['student_id'];
									   $_SESSION['stdlname']=$rows['lname'];
									   $_SESSION['stdfname']=$rows['fname'];
									   $_SESSION['parentphone']=$rows['parent_phone'];
					
     echo '<option value="'.$_SESSION['sid'].'">'.$_SESSION['stdlname']." ".$_SESSION['stdfname'].'</option>';
                         
                         
							   }
						   }
						   else'';
						   
}
if (isset($_POST["newdata"]))
 {
	 $numquery="select parent_name, parent_phone,rollnum,student_id from student_tab where student_id='".$_POST["newdata"]."' ";
		 $result=mysqli_query($con,$numquery);
		 $array=mysqli_fetch_row($result);
		 echo json_encode($array);
	 //$output.='here';
	 //echo $output;
 }
/*	$sid=mysqli_real_escape_string($con,$_POST['stdname']);  
	//$sid=4;
 $xquery="select * from student_tab where student_id='$sid'";
 $output=mysqli_query($con,$xquery);
 if(mysqli_num_rows($output))
   {
	   while($rows=mysqli_fetch_array($output))
		   {
			   $parentphone=$rows['parent_phone'];
			   
			   echo $parentphone;
		   }
 }*/
?>