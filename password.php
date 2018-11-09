<form action="password.php" method="POST">
     Password: <input type="password" name="password">
     <input type="submit">
</form>

<?php
echo $_POST["password"];
?>