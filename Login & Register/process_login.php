<?php include 'config.php' ;
$username= $_POST['username'];
$passwords= $_POST['passwords'];
if (empty($_POST['username'])) {
    echo "<h1>Please input username</h1>";
} 
    else {
$sql="insert into Login (username, passwords)
values('$username', '$passwords')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='login.php' class='top'>Home </a>";
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

