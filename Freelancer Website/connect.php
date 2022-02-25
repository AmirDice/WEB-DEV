<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
  die ('connection failed : '.$conn->connect_error');
}
else {
  $stmt = $conn->prepare("insert into login (firtname, lastname) values(?, ?)");
  $stmt->bind_param("ss",$firstname, $lastname);
  $stmt->execute();
  echo "login successful";
  $stmt->close();
  $conn->close();
}
 ?>
