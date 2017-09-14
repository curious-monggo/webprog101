<?php
include 'dbh.inc.php';
$sql = "SELECT * FROM posts ORDER BY posts_id DESC LIMIT 5";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {




         
             echo "<tr>
               <td>".$row['posts_category']."</td>
               <td><a href='detail.php?id=".$row['posts_id']."'>".$row['posts_title']."</a></td>
                               <td>".$row['posts_content']."</td>
                <td></td>
             </tr>";
    }
}