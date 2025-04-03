<?php
$title="geocom";
$h1="geocom";
$dbcon=mysqli_connect("localhost","root","","shop");


$date=date('Y-m-d');

  $sel_gal=mysqli_query($dbcon,"select * from dis where end_dt<'$date'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {
while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
    
     $ins=mysqli_query($dbcon,"update pro set price='$r_gal[5]' where id='$r_gal[1]'");
    
    if($ins>0)
    {
        
    }
    
    
    
    
}
}
else
{
    
}
?>
<script type="text/javascript">
    function nme(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=112)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Aadhar Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
  
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function vem(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
     }  
    </script>