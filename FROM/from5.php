<html>
<head><title>Login Here</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
<h2>Login Here...</h2>
Username : <input type="text" name="username"><br>
Password : <input type="password" name="password"><br>
<input type="submit" name="Login" value="Login">
<input type="reset" name="reset" value="Reset">
</FORM>
</body>
</html>
<?php
if (isset($_POST['Login'])) {
$user = $_POST['username'];
$pass = $_POST['password'];
if ($user == "anes" && $pass == "123") {
echo "<h2>Login Berhasil</h2>";
} else {
echo "<h2>Login Gagal</h2>";
}
}
?>