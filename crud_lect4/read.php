<?php
include 'header.php';
include 'db.php'; 
$sql = "select * from Game";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
echo "<table class=\"table\"><tr><th>ID</th><th>Title</th><th>Genre</th>
<th>Short Description</th><th>Long Description</th><th>Title of Image</th><th>Release Date</th> </tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["id"] . "</td><td>". $row["title"]."</td> <td>". $row["genre"] 
        
        ."</td><td>". $row["short_description"]. "</td><td>". $row["long_description"]
        ."</td></tr>". $row["title_image"]. "</td><td>". $row["release_date"]
        ."</td></tr>";
    }
    echo "</table>";
}
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 
else 
{
    echo "no results";
}


$conn->close();
include 'footer.php';
?>