<?php
include_once("../config/connect.php");
include_once("../include/structure.php");
include_once("../config/db.php");
$obj=new database();
$obj_struct=new structure();
$rs=$obj->count_no();
$e_id=mysql_fetch_array($rs);
$enq_id=$e_id['total']+1;
$enquiry_id=date('d/m/Y')."_".$enq_id ;

$name=$_REQUEST['name'];
$contact=$_REQUEST['contact'];
$email=$_REQUEST['email'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$enquiry_for=$_REQUEST['enquiry_for'];
$informed_from=$_REQUEST['informed_from'];



$obj2=$obj_struct->insert("enquiry","'','$enquiry_id','1','$name','$contact','$email','$city','$state','$enquiry_for','$informed_from','',curdate(),'',curdate(),'',curdate()","tid,enquiry_id,isactive,name,contact,email,city,state,enquiry_for,informed_from,created_by,created_date,updated_by,updated_date,deleted_by,deleted_date");
?>
<script>
alert("Enquiry Posted Sucessfully");
document.location="enquiry.php";
</script>



	
