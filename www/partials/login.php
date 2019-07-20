<a class="signup-button" href="signup.php">Don't have an account? Create one!</a>
<form action="login.php" method="post">
  <input type="hidden" name="form-sent" value="true" />
  <fieldset>
    <label for="username">Username</label>
    <input type="text" name="username" value="<?php print $username ?>" 
     required="required" />

    <label for="password">Password</label>
    <input type="password" name="password" required="required" />

    <input type="submit" value="Log In" />
  </fieldset>
</form>
