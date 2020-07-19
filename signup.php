<?php

require "header.php"

?>

<main>
   <h1>Signup</h1>
   <br>
   <?php
   if(isset($_GET['error'])){
       if ($_GET['error']=="emptyfields"){
           echo '<p>Fill in all fields</p>';
       }
       elseif($_GET['error']=="invalidmail"){
        echo '<p>Invalid email field</p>';

       }
   }
   
   ?>
   
    <form class="boxx" action="includes/signup.inc.php" method="post">
        <input class ="txtbox" type="text" name="uid" placeholder="Username">
        <input class ="txtbox" type="text" name="mail" placeholder="E-mail">
        <input class ="txtbox" type="password" name="pwd" placeholder="Password">
        <input class ="txtbox" type="password" name="pwd-repeat" placeholder="Repeat Password">
        <button class="cta" type="submit" name="signup-submit">Signup</button>
    </form>
</main>

<?php
require "footer.php"
?>