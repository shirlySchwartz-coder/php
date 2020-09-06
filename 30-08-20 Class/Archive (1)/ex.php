<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="fullName" placeholder="Full Name">
        <input type="submit">
    </form>

    <?php
        if(isset($_POST['fullName']) && !empty($_POST['fullName'])) {
            $names = explode(" ", htmlentities($_POST['fullName']));

            if(count($names) < 2) {
                echo "Missing last Name";
                return;
            }

            for($i = 0 ; $i < count($names) ; $i++) {
                if(strlen($names[$i]) < 2) {
                    echo "<div class='error'>Error</div>";
                    return;
                }
            }

            echo "<div class='success'>Success</div>";
            echo "<div>First Name " . array_shift($names) . "</div>";
            echo "<div>Last Name " . implode(" ", $names) . "</div>";
        }
    ?>
</body>
</html>