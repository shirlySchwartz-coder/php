<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Set Email
    </h1>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Email">
        <input type="submit">
    </form>

    <?php
        $errors = array();

        function validateEmail($email) {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
        
        if(isset($_POST['email'])) {
            $email = $_POST['email'];

            if(empty($email)) {
                array_push($errors, "Empty email");

            } else if(validateEmail($email)) {
                header('Location: https://example.com?email=' . $email);
                exit;
            
            } else {
                array_push($errors, "Invalid email");
            }
        }

        if(count($errors) > 0) {
            echo "<h3>";
            foreach($errors as $err) {
                echo $err;
                echo "<br>";
            }
            echo "</h3>";
        }
    ?>
</body>
</html>