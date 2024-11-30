<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>آلة حاسبة بسيطة</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        form { display: inline-block; margin-top: 20px; }
        input, select { margin: 5px; padding: 10px; font-size: 16px; }
        .result { margin-top: 20px; font-size: 18px; color: green; }
    </style>
</head>
<body>
    <h1>آلة حاسبة بسيطة</h1>
    <form method="POST" action="">
        <input type="number" name="num1" placeholder="الرقم الأول" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">×</option>
            <option value="divide">÷</option>
        </select>
        <input type="number" name="num2" placeholder="الرقم الثاني" required>
        <button type="submit">احسب</button>
    </form>




    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "لا يمكن القسمة على صفر!";
                }
                break;
            default:
                $result = "عملية غير صالحة!";
        }

        echo "<div class='result'>النتيجة: $result</div>";
    }
    ?>
</body>
</html>
