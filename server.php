<?php
session_start();
$name="";
	$connection=mysqli_connect("localhost","root","","portfolio");

if (isset($_POST['send'])) {

		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$comment=$_POST['comment'];
    $uploaddate=$_POST['uploaddate'];
		
$query = "INSERT INTO tbl_comment (name, email, subject, comment, uploaddate) 
			VALUES ('$name','$email', '$subject','$comment','$uploaddate')";
				mysqli_query($connection, $query);
				echo "<script>alert('Thank you for your feedback! ');document.location='index.php'</script>";	
				
}


if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);


        $sql_query = "SELECT * FROM tbl_account WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($connection,$sql_query);

  if ( $row=mysqli_fetch_array($result) > 0) {
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      header("location: admin.php");
  }
  else{
    echo "<script>alert('Incorrect credentials! ');document.location='login.php'</script>";   
  }

      
}



?>