<?php 
session_start();

$valid_username = "admin";
$valid_password = "123";

try {
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ??'';

        if ($username === $valid_username && $password === $valid_password) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("location: dashboard.php");
            exit;
    } else {
        throw new Exception("Username atau password salah!");
    }
  }
 } catch (Exception $e) {
    $error = $e->getMessage();
 }
?>

<form method="POST">
    <input type="text" name="uername" placeholder="Username" required><br>
    <input type="text" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>

<?php if (isset($error)) echo "<p style='color:red;'>$error<p>"; ?>