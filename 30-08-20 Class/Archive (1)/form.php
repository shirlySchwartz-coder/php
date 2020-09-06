<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Form
    </h1>
    <!-- Lead form -->
    <form method="POST" action="./api.php">
        <input type="text" name="firstName" placeholder="First Name">
        <input type="text" name="lastName" placeholder="Last Name">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" value="Send!">
    </form>
    <!-- Calculator form -->
    <form method="GET" action="./api.php">
        <input type="number" name="x" placeholder="X">
        <select name="sign">
            <?php 
                $signs = array(
                    "Plus"      => "+",
                    "Minus"     => "-",
                    "Multiply"  => "*"
                );
            ?>
            <?php foreach($signs as $key => $val):?>
                <option value="<?php echo $key;?>">
                    <?php echo $val;?>
                </option>
            <?php endforeach;?>
        </select>
        <input type="number" name="y" placeholder="Y">
        <input type="submit" value="Calculate!">
    </form>
</body>
</html>