<?php
include 'entete.php';
?>  
<section>
    <div class="container" style="margin-top:30px">
        <div class="row">
          <div class="col-sm-4">
          </div>        
          <div class="col-sm-8">
              <form action="traitCnx.php" method="post">
                <div class="form-group">
                    <label for="EmailDemo">Your Email:</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Please enter your primary email</small>
                </div>
                <div class="form-group">
                    <label for="passDemo">Enter Password:</label>
                    <input type="password" class="form-control" name="pass" aria-describedby="passHelp" placeholder="Password">
                </div>
                <button type="submit" >Se connecter</button>
                <button type="reset" >Cancel</button>

              </form>
          </div>
      </div>
    </div>
</section>
 <!-- FOOTER -->
 <?php require 'pieddepage.html';?>    
</body>
</html>