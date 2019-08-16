<form action="signup.php" method="post">
  <input type="hidden" name="form-sent" value="true" />
  <fieldset>
    <legend>Information</legend>

    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" required="required" 
           value="<?php echo $first; ?>" />

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" required="required" 
           value="<?php echo $last; ?>" />

    <label for="email">Email</label>
    <input type="text" name="email" id="email" required="required" 
           value="<?php echo $email; ?>" />
  </fieldset>
  <fieldset>
    <legend>Credentials</legend>

    <label for="username">Username</label>
    <input id="username" type="text" name="username" required="required" 
           value="<?php echo $username; ?>" />

    <label for="password">Password</label>
    <input id="password" type="password" name="password" required="required" />

  </fieldset>
  <fieldset>
    <legend>Verification</legend>
    <label for="verify-password">Please re-type password</label>
    <input id="verify-password" type="password" name="verify-password" 
           required="required" />
  </fieldset>
  <fieldset>
    <input type="submit" value="Sign up!" />
  </fieldset>
</form>
