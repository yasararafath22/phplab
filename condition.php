<!DOCTYPE html>
<html>
<head>
    <title>Voting Eligibility Checker</title>
</head>
<body>
    <h2>Check Your Voting Eligibility</h2>
    <form method="post">
        Enter Your Age: <input type="number" name="age" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST['age'];

        if ($age >= 18) {
            echo "<h3 style='color:green;'>You are eligible to vote.</h3>";
        } else {
            echo "<h3 style='color:red;'>You are not eligible to vote. You must be 18 or older.</h3>";
        }
    }
    ?>
</body>
</html>
