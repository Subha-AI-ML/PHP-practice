
<?php
session_start();

// Predefined login credentials
$correct_username = "student";
$correct_password = "12345";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $correct_username &&
        $password == $correct_password) {

        // Start session
        session_regenerate_id(true);

        $_SESSION["username"] = $username;
        $_SESSION["student_name"] = "Rahul Sharma";
        $_SESSION["attendance"] = 82;

        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();

    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
</head>
<body>

    <h2>Student Attendance Portal</h2>

    <form method="POST" action="">

        <label>Username:</label>
        <input type="text" name="username" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <button type="submit">Login</button>

    </form>

    <p style="color:red;">
        <?php echo $error; ?>
    </p>

</body>
</html>
