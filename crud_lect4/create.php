<?php include 'db.php' ;
include 'header.php' ;
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$city= $_POST['city'];
$groupid= $_POST['groupid'];
if (empty($_POST['fname'])) {
    echo "<h1>Please input fname</h1>";
} 
    else {
$sql="insert into studentsinfo (fname, lname, city, groupid)
values('$fname', '$lname', '$city', '$groupid')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='update.php' class='top'>Home </a>";
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

include 'footer.php';
?>