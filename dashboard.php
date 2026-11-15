
<?php
session_start();

// Check whether the student is logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION["student_name"];
$attendance = $_SESSION["attendance"];

// Check examination eligibility
if ($attendance >= 75) {
    $status = "Eligible for Examination";
} else {
    $status = "Not Eligible for Examination";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
</head>
<body>

    <h2>Student Attendance Dashboard</h2>

    <h3>Welcome, <?php echo htmlspecialchars($name); ?>!</h3>

    <p>
        <b>Student Name:</b>
        <?php echo htmlspecialchars($name); ?>
    </p>

    <p>
        <b>Attendance Percentage:</b>
        <?php echo $attendance; ?>%
    </p>

    <h3>
        <?php echo $status; ?>
    </h3>

    <a href="logout.php">Logout</a>

</body>
</html>
