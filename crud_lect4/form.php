<?php 
include 'header.php'; ?>
<form name= "form1" method="post" action="create.php">
    Title: <input type="text" name="title" ><br>
    Short Description: <input type="text" name="short_description"><br>
    Long Description: <input type="text" name="long_description" ><br>
    Title of Image: <input type="text" name="title_image"><br>
    Release Date: <input type="text" name="release_date"><br>
    Choose Genre:
    <select name="genre"> 
    <option value="BBCAP19"> BBCAP19 </option>
    <option value="BBCAP20"> BBCAP20 </option>
    <option value="BBCAP21"> BBCAP21 </option>
    <option value="Others"> Others </option>
</select>
<br>
<input type="submit" value="Save Data">
</form>
<?php include 'footer.php'; ?>
