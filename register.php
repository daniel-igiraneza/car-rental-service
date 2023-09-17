<?php
require("code.php");

$firstname=$_POST["First_Name"];
$lastname=$_POST["Last_Name"];
$email=$_POST["Email"];
$setpassword=password_hash($_POST["Set_Password"],PASSWORD_DEFAULT);
$gender=$_POST["Gender"];
$dateofbirth=$_POST["Date_of_Birth"];
$idno=$_POST["ID_Number"];
$district=$_POST["District"];

$query = "INSERT INTO user(First_Name,Last_Name,Email,Set_Password,Gender,Date_of_Birth,ID_Number,District)
VALUES('firstname','lastname','email','setpassword','gender','dateofbirth','idno','district')";

$rs=mysqli_query($con,$query);
if($rs){
    header("Location: http://localhost/BRS/login.html");
}
else{
    echo "Failed";
}
?>