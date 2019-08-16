<form action="userUpdate.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <fieldset>
    <legend>Information</legend>

    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname"
           value="<?php echo $first_name; ?>" />

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname"
           value="<?php echo $last_name; ?>" />

    <label for="email">Email</label>
    <input type="text" name="email" id="email"
           value="<?php echo $email; ?>" />
  </fieldset>
  <fieldset>
    <legend>Credentials</legend>

    <label for="username">Username</label>
    <input id="username" type="text" name="username" 
           value="<?php echo $username; ?>" />

    <label for="password">Password</label>
    <input id="password" type="password" name="password" />

  </fieldset>
  <fieldset>
    <label for="accesslevel">Access Level</label>
    <select id="accesslevel" name="accesslevel">
    <?php 
      echo option(1, 'Customer', $access_level);
      echo option(2, 'Publisher', $access_level);
      echo option(3, 'Administrator', $access_level); ?>
    </select>
  </fieldset>
  <fieldset>
    <input type="submit" value="Update information" />
    <a href="deleteUser.php?id=<?php echo $id; ?>" class="delete-button">
      Delete User
    </a>
  </fieldset>
</form>
