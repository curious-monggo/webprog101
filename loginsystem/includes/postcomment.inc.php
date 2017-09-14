<?php
session_start();
if(!isset($_SESSION['u_id'])){
	//include_once 'dialogboxloginfirst.inc.php';

  	header("Location: ../main.php?loginfirst");
	exit();
}
else if(isset($_SESSION['u_id'])){

	if (isset($_POST['submit'])) {

		include_once 'dbh.inc.php';
	
		$comment = mysqli_real_escape_string($conn, $_POST['commentEnter']);
		

		//Error handlers
		//Check for empty fields
		if (empty($comment)) {
			header("Location: ../main.php?commentfields=empty");
			exit();
		} 
			//Check if input characters are valid
				//Check if email is valid
			else {
				$sql = "SELECT * FROM comments WHERE comment_content='$comment'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../main.php?duplicatecomment");
						exit();
					} 

					else {
						//inserting question to database
						//$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO comments (comment_content) VALUES ('$comment');";
						$idpost = $_GET['id'];
						mysqli_query($conn, $sql);
						header("Location: ../detail.php?".$idpost."");
						//<a href='detail.php?id=".$row['posts_id']."'>
						exit();
					}
				}
			
		

	} else {
		header("Location: ../signup.php");
		exit();
	}
}