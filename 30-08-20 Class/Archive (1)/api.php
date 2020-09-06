<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $firstName = htmlentities($_POST['firstName']);
            $lastName = htmlentities($_POST['lastName']);
            $email = htmlentities($_POST['email']);

            echo "<h1>";
            echo "Hi ";
            echo $firstName;
            echo " ";
            echo $lastName;
            echo "</h1>";
            echo "<h2>";
            echo "Email: ";
            echo $email;
            echo "</h2>";
        } 
    ?>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $x = (int)htmlentities($_GET['x']);
            $y = (int)htmlentities($_GET['y']);
            $sign = htmlentities($_GET['sign']);
            
            echo "<h1>";
            echo "= ";

            switch ($sign) {
                case 'Plus':
                    echo $x + $y;
                    break;

                case 'Minus':
                    echo $x - $y;
                    break;

                case 'Multiply':
                    echo $x * $y;
                    break;
                
                default:
                    echo "no answer";
                    break;
            }

            echo "</h1>";
        }
    ?>
</body>
</html>
