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
          <a onclick="commentToggle()"><h4>Add a comment</h4></a>
              <form id="commentform" method="POST" action="includes/postcomment.inc.php?id=<?php echo $_GET['id']?>">

              <textarea name="commentEnter" rows="5" cols="31" placeholder="Enter a comment here!"></textarea>
   
              <input id="button" type="submit" name="submit" value="Post">
            </form>
         </div>




          <br>

          <br>
          <div class="forum-card-topic">
          <h2>Answers</h2>
             <?php
              include_once 'includes/answers.inc.php';
            ?>          
               
          </div>
          <br>

          <div class="forum-card-topic">
              <a  onclick="answerToggle()"><h4 id="answerlabel">Answer this question</h4></a>
              <form id="answerform" method="POST" action="includes/postanswer.inc.php?id=<?php echo $_GET['id']?>">

              <textarea name="answerEnter" rows="5" cols="31" placeholder="Enter an answer here!"></textarea>
   
              <input id="button" type="submit" name="submit" value="Post" >
            </form>
         </div>
                           
      </div>
  </section>
<script>
function answerToggle(){
  var x = document.getElementById('answerform');
  var y = document.getElementById('answerlabel');
  if(x.style.display ==='block'){
    x.style.display = 'none';
    
  } else{
    x.style.display = 'block';
    y.style.display = 'block';
  }

}
function commentToggle(){
  var x = document.getElementById('commentform');
  if(x.style.display ==='block'){
    x.style.display = 'none';
  } else{
    x.style.display = 'block';
  }

}
</script>
  <?php

        include_once 'footer.php';
        //include_once 'includes/dialogboxloginfirst.inc.php'
   ?>
