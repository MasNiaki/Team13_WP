<?php
include 'header.php';
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM Game WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>

<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Title: <br>
<input type="text" name="title"  value="<?php echo $row['title']; ?>">
<br>
Genre:<br>
<input type="text" name="genre" value="<?php echo $row['genre']; ?>">
<br>
Short Description:<br>
<input type="text" name="short_description" value="<?php echo $row['short_description']; ?>">
<br>
Long Description:<br>
<input type="text" name="long_description" value="<?php echo $row['long_description']; ?>">
<br>
Title of Image:<br>
<input type="text" name="title_image" value="<?php echo $row['title_image']; ?>">
<br>
Release Date:<br>
<input type="text" name="release_date" value="<?php echo $row['release_date']; ?>">
<br>

<input type="submit" name="submit" value="Delete" >
</form>
<?php 
if(isset($_POST['submit'])){
    $query = mysqli_query($conn,"DELETE FROM Game where id='$a'");
    if($query){
        echo "Record Deleted with id: $a <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
include 'footer.php';
?>
