<?php
session_start();
 ?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
  <header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="main.php">TestForum</a></li>
                <li><a href="qanda.php">Test QnA</a></li>

            </ul>
            <div class="nav-login">

              <?php
                if(isset($_SESSION['u_uid'])){
                    echo '              <form action="includes/logout.inc.php" method="POST">
                                    <button type="submit" name="submit">Logout</button>
                                  </form>';
                }
                else{
                      echo '              <form method="POST" action="includes/login.inc.php">
                                        <input type="text" name="uid" placeholder="Username/email">
                                        <input type="password" name="pwd" placeholder="Password">
                                        <button type="submit" name="submit">Login</button>
                                    </form>
                                    <a href="signup.php">Sign up!</a>';
                }
              ?>



            </div>
        </div>
    </nav>
  </header>
