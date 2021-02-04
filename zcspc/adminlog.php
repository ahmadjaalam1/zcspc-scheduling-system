<?php

session_start();


  $username = $_POST['username'];
  $password = $_POST['password'];
 
 
	 $conn = mysqli_connect("localhost", "root", "", "zcspc")or die("couldn't connect to the database!");
	 
	 $query = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' and password = '$password'");
	 
	 $row = mysqli_fetch_array($query);

	 if (empty($username) || empty($password)){
	echo('<script type="text/javascript">
	alert("empty box");
	   location="index.php";
		 </script>');
		 exit();


}elseif($row['username'] == $username && $row['password'] == $password){
	
	
	
		echo '<script type="text/javascript">
		alert("Welcome User!");
		   location="admin.php";
			 </script>';
			 $_SESSION['username'] = $username;
		

}else{
	echo('<script type="text/javascript">
	alert("check you password and username");
	   location="index.php";
		 </script>');
		 exit();
}
	  	 
?>
