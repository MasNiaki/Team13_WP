
<?php
include_once 'header.php';
require_once 'db.php'; 
$sql = "select * from Game";
$result = $conn->query($sql);?>
<table class="table">
<tr>
<th>ID</th><th>Title</th><th>Genre</th>
<th>Short Description</th><th>Lnog Description</th> <th>Title of Image</th><th>Release Date</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["title"]; ?></td>
<td><?php echo $row["genre"]; ?></td>
<td><?php echo $row["short_description"]; ?></td>
<td><?php echo $row["long_description"]; ?></td>
<td><?php echo $row["title_image"]; ?></td>
<td><?php echo $row["release_date"]; ?></td>
<td><a href="updatesingle.php?id=<?php echo $row['id']; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no results";
}
$conn->close();
?>
</table>
<?php include 'footer.php' ?>

