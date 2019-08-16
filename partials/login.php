<a class="signup-button" href="signup.php">Don't have an account? Create one!</a>
<form action="login.php" method="post">
  <fieldset>
    <label for="username">Username</label>
    <input id="username" type="text" name="username" value="<?php echo $username ?>" 
     required="required" />

    <label for="password">Password</label>
    <input id="password" type="password" name="password" required="required" />

    <input type="submit" value="Log In" />
  </fieldset>
</form>
