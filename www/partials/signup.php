<h1>Currently, new accounts cannot be made</h1>
<form action="signup.php" method="post">
  <input type="hidden" name="form-sent" value="true" />
  <fieldset>
    <label for="username">Username</label>
    <input type="text" name="username" value="<?php print $username ?>" 
     required="required" />

    <label for="password">Password</label>
    <input type="password" name="password" required="required" />

    <input type="submit" value="Sign up!" disabled="disabled" />
  </fieldset>
</form>
