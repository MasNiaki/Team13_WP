<?php
include 'header.php';
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM Game WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>

<h1>Update  Data</h1>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Title: <br>
<input type="text" name="title"  value="<?php echo $row['title']; ?>">
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
Genre:<br>
<select name="genre"> 
    <option value="BBCAP19"> BBCAP19 </option>
    <option value="BBCAP20"> BBCAP20 </option>
    <option value="BBCAP21"> BBCAP21 </option>
    <option value="Others"> Others </option>
</select>
<br>

<input type="submit" name="submit" value="Submit" >
</form>
<?php 
if(isset($_POST['submit'])){
    # it now updates only fname, your task is to update all other fields in your team
    $fname = $_POST['title'];
    $query = mysqli_query($conn,"UPDATE Game set fname='$title' where id='$a'");
    if($query){
        echo "Record Modified Successfully <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not modified";}
    }
$conn->close();
include 'footer.php';
?>
