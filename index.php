<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .calculator {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .calculator input[type="text"], .calculator input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Calculator</h2>
        <form action="calculator.php" method="post">
            <input type="text" name="num1" placeholder="Enter first number" required>
            <input type="text" name="num2" placeholder="Enter second number" required>
            <input type="submit" name="submit" value="Calculate">
        </form>
        <?php
        // PHP code to handle calculation
        if(isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            // Check if numbers are numeric
            if(is_numeric($num1) && is_numeric($num2)) {
                echo "<h4>Results:</h4>";
                echo "Sum: " . ($num1 + $num2) . "<br>";
                echo "Difference: " . ($num1 - $num2) . "<br>";
                echo "Product: " . ($num1 * $num2) . "<br>";
                if($num2 != 0) {
                    echo "Division: " . ($num1 / $num2) . "<br>";
                } else {
                    echo "Division by zero is not allowed.<br>";
                }
            } else {
                echo "<p>Please enter valid numeric values.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
