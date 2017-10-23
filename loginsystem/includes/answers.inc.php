<?php

include 'dbh.inc.php';
$postanswerid = mysqli_real_escape_string($conn, $_GET['id']);	
$sql = "SELECT * FROM answers WHERE postanswer_id='$postanswerid' ORDER BY answers_id ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {




        echo' 
              

        
      
               

               <p>'.$row['answer_content'].'</p>
               <h6>answered by: @'.$row['answer_username'].'</h6><hr>


               ';
           }
}