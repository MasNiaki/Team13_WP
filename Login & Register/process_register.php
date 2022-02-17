<?php include 'config.php' ;
$fullname= $_POST['fullname'];
$email= $_POST['email'];
$username= $_POST['username'];
$passwords= $_POST['passwords'];
if (empty($_POST['fullname'])) {
    echo "<h1>Please input fullname</h1>";
} 
    else {
$sql="insert into Register (fullname, email, username, passwords)
values('$fullname', '$email', '$username', '$passwords')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='register.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

}
# -> this is single arrow operator known as object operator 
# -> it is used to access methods and properties of a class
# === it is known as identical operator and does a strict comparison 

?>

