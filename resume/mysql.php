<?php
$Name = filter_input(INPUT_POST, 'Name');
$Email = filter_input(INPUT_POST, 'Email');
$Message = filter_input(INPUT_POST, 'Message');
if (!empty($Name)){
if (!empty($Email)){
if (!empty($Message)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "resume";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO contact ( Name, Email, Message)
values ('$Name','$Email','$Message')";
if ($conn->query($sql)){
alert(" Thank you ,for your feedback. I will get back to you as soon as possiable.")
header('location: resume.html');
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Message should not be empty";
die();
}
}
else{
echo "Email should not be empty";
die();
}
}
else{
echo "name should not be empty";
die();
}
?>