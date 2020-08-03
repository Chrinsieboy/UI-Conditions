<?php

$sql = "SELECT FROM register";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
        $resultImg = mysqli_query($connection, $sqlImg);
        while ($rowImg = mysqli_fetch_assoc($resultImg)) {
            echo "<div>";
            if ($rowImg['status'] == 0) {
               echo "<img src = 'uploads/profile".$id.".jpg'>"; 
            }
            else {
                echo"<img src='img/profiledefault.jpg'>";
            }
            echo "</div>";
        }       
   } 
}
else {
    echo"There are no users yet!";
 }
