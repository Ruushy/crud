<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Calculator</h2>
        <form method="POST"  class="mt-4">
            <div class="form-group">
                <input type="text" class="form-control" name="num1" placeholder="Enter number 1" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="num2" placeholder="Enter number 2" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        <?php
        
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            $result = '';

            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = 'Cannot divide by zero';
                    }
                    break;
                default:
                    $result = 'Invalid operator';
                    break;
            }

            echo '<h3 class="mt-4">Jawaabta: ' . $result . '</h3>';
        
        ?>
    </div>
</body>
</html>