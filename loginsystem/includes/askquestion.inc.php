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
		$questionTitle = mysqli_real_escape_string($conn, $_POST['questionTitleEnter']);
		$question = mysqli_real_escape_string($conn, $_POST['questionEnter']);
		$category = mysqli_real_escape_string($conn, $_POST['categoryEntered']);

		//Error handlers
		//Check for empty fields
		if (empty($questionTitle)||empty($question)||empty($category)) {
			header("Location: ../main.php?questionfields=empty");
			exit();
		} else {
			//Check if input characters are valid
			if (!preg_match("/^[a-zA-Z]*$/", $questionTitleEnter) || !preg_match("/^[a-zA-Z]*$/", $questionEnter)) {
				header("Location: ../main.php?question=propertyinvalid");
				exit();
			} 
				//Check if email is valid
			else {
				$sql = "SELECT * FROM posts WHERE posts_title='$questionTitle'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../main.php?questionalreadyasked");
						exit();
					} 

					else {
						//inserting question to database
						//$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO posts (posts_title, posts_content, posts_category) VALUES ('$questionTitle', '$question','$category');";
						mysqli_query($conn, $sql);
						header("Location: ../main.php?askedquestionpost=success");
						exit();
					}
				}
			
		}

	} else {
		header("Location: ../signup.php");
		exit();
	}
}