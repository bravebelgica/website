<?php

  // Sanitize incoming username and password
  $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

  // Connect to the MySQL server
  $db = new mysqli("localhost", "root", "jason", "phpbuilder");

  // Determine whether an account exists matching this username and password
  $stmt = $db->prepare("SELECT id FROM accounts WHERE username = ? and password = md5(?)");

  // Bind the input parameters to the prepared statement
  $stmt->bind_param('ss', $username, $password); 

  // Execute the query
  $stmt->execute();

  // Store the result so we can determine how many rows have been returned
  $stmt->store_result();

  if ($stmt->num_rows == 1) {

    // Bind the returned user ID to the $id variable
    $stmt->bind_result($id); 
    $stmt->fetch();

    // Update the account's last_login column
    $stmt = $db->prepare("UPDATE accounts SET last_login = NOW() WHERE id = ?");
    $stmt->bind_param('d', $id); 
    $stmt->execute();

    // Redirect the user to the home page
    header('Location: http://www.example.com');
  }

?>






<?php 
if ($stmt->num_rows == 1) {

  // Bind the returned user ID to the $id variable
  $stmt->bind_result($id); 
  $stmt->fetch();

  // Update the account's last_login column
  $stmt = $db->prepare("UPDATE accounts SET last_login = NOW() WHERE id = ?");
  $stmt->bind_param('d', $id); 
  $stmt->execute();

  session_start();

  $_SESSION['username'] = $username;
  
  // Redirect the user to the home page
  header('Location: http://www.example.com');
}

?>



<?php session_start(); ?>

<?php if (isset($_SESSION['username'])) { ?>
<p>Welcome back, <?= $_SESSION['username']; ?>!</p>
<?php } else { ?>

<p>
  <a href="register.php">Create an account</a> | 
  <a href="login.html">Login to your account</a>
</p>

<?php } ?>