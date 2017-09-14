<?php

include 'dbh.inc.php';
$sql = "SELECT * FROM comments ORDER BY comments_id ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {




         
             echo '<p>'.$row['comment_content'].'   -'.$_SESSION['u_uid'].'</p>';
    }
}