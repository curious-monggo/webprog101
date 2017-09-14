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
          <div class="forum-card">
            <form method="POST" action="includes/askquestion.inc.php">
              <select name="categoryEntered">
                <option>Java</option>
                <option>C#</option>
                <option>HTML</option>
                <option>CSS</option>
              </select>
              <input type="text" name="questionTitleEnter" placeholder="Enter a title question here!"/>
           
              <textarea name="questionEnter" rows="5" cols="31" placeholder="Enter a question here!"></textarea>
              <input id="button" type="submit" name="submit" value="Post">
            </form>

          </div>
          <br><br>
          <div class="forum-card">
            <h4>Newest</h4>
            <hr>
            <table>
              <tr>
                <th>Category</th>
                <th>Topic</th>
                <th>Question</th>               
                <th>Replies</th>
                <th>Views</th>
              </tr>
             <?php
              include_once 'includes/questions.inc.php';
            ?>          
            </table>            
          </div>
          <br><br>


                            
      </div>
  </section>
  <?php
        include_once 'footer.php';
        //include_once 'includes/dialogboxloginfirst.inc.php'
   ?>
