<?php
session_start();

// connect to mysqli database
$conn = mysqli_connect("localhost", "root", "", "zcspc");
if(isset($_POST['confrmpwd']))

$oldpwd = $_POST['oldpwd'];
$new_pwd = $_POST['newpwd'];
$re_pass = $_POST['confrmpwd'];

$select= "SELECT * FROM admin where id = '1'" ;
$query1=mysqli_query($conn, $select);
$row= mysqli_fetch_array($query1);
$result = $row['password'];

if($result == $oldpwd){
  if($new_pwd== $re_pass){
    $update_pwd = "Update admin set password = '$new_pwd' where id ='1'";
    $successs = mysqli_query($conn, $update_pwd);
    echo "<script>alert('success'); window.location = 'admin.php'</script>";
    
   }else{
    echo "<script>alert('your new and retype dont match); window.location = 'admin.php'</script>";
  }
}
else{
  echo "<script>alert('your old password is wrong'); window.location = 'admin.php'</script>";
}





?>