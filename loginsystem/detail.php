<?php
      include_once 'header.php';
 ?>
  <section class="main-container">
      <div class="main-wrapper">
        <h2>Test Forum</h2>
        <?php
        if(isset($_SESSION['u_id'])){
          echo "You are logged in,  ".$_SESSION['u_uid'].".";
        }
        ?>

<br/>
<br/>
<br/>     

 
          <div class="forum-card-topic">
          <h2>Question</h2>
             <?php
              include_once 'includes/questionsdetail.inc.php';
            ?>          
                    
          </div>
          <br>

          <br>
          <div class="forum-card-topic">
          <h2>Comments</h2>
             <?php
              include_once 'includes/comments.inc.php';
            ?>          
                    
          </div>
          <br>

          <div class="forum-card-topic">
              <form method="POST" action="includes/postcomment.inc.php">
           
              <textarea name="commentEnter" rows="5" cols="31" placeholder="Enter a comment here!"></textarea>
              <input id="button" type="submit" name="submit" value="Post">
            </form>
          </div>

                            
      </div>
  </section>
  <?php
        include_once 'footer.php';
        //include_once 'includes/dialogboxloginfirst.inc.php'
   ?>
