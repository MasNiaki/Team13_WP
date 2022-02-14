<?php include 'db.php' ;
include 'header.php' ;
$title= $_POST['title'];
$genre= $_POST['genre'];
$short_description= $_POST['short_description'];
$long_description= $_POST['long_description'];
$title_image= $_POST['title_image'];
$release_date= $_POST['release_date'];
if (empty($_POST['title'])) {
    echo "<h1>Please input title</h1>";
} 
    else {
$sql="insert into Game (title, genre, short_description, long_description, title_image, release_date)
values('$title', '$genre', '$short_description', '$long_description', '$title_image', '$release_date')";

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