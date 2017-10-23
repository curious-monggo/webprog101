<?php

include 'dbh.inc.php';
$postcommentid = mysqli_real_escape_string($conn, $_GET['id']);	
$sql = "SELECT * FROM comments WHERE postcomment_id='$postcommentid' ORDER BY comments_id ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {




         
             echo '<p>'.$row['comment_content'].'   -'.$row['comment_username'].'</p>';
    }
}