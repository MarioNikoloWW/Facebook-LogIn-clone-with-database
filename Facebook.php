<?php 
/*
  $password = $_POST['Pass'];
  $email = $_POST[' Email'];
  if (!empty($password) || !empty($email)) {
   $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "youtube";
      //create connection
      $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
      if (mysqli_connect_error()) {
       die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      } else {
       $SELECT = "SELECT * FROM `log`";
       $INSERT = "INSERT INTO log (Email, Password) values(?, ?)";
       //Prepare statement
       $stmt = $conn->prepare($SELECT);
       $stmt->bind_param("s", $email);
       $stmt->execute();
       $stmt->bind_result($email);
       $stmt->store_result();
       $rnum = $stmt->num_rows;
       if ($rnum==0) {
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ssssii", $username, $password, $gender, $email, $phoneCode, $phone);
        $stmt->execute();
        echo "New record inserted sucessfully";
       } else {
        echo "Someone already register using this email";
       }
       $stmt->close();
       $conn->close();
      }
  } else {
   echo "All field are required";
   die();
  }*/
  echo "Hello";
    $Email = $_POST['Email'];
    $Password = $_POST['Pass'];

     $host = "localhost";
     $username = "root";
     $password = "";
     $db = "mariodata";
     $conn = mysqli_connect($host, $username,$password, $db);
     if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO log (Email, Password) VALUES (?, ?)");
		$stmt->bind_param("ss", $Email, $Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>