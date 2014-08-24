<?php session_start(); 

define( 'COCINC', 'coc-includes' );
?>


<?php if (isset($_SESSION['username'])) { ?>
<p>Welcome back, <?= $_SESSION['username']; ?>!</p>
<?php } else { ?>

<p>
  <a href="register.php">Create an account</a> | 
  <a href="login.html">Login to your account</a>
</p>

<?php } 

echo COCINC;
?>