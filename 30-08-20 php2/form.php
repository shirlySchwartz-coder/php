<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="./api" method="post">
        <input type="text" name="fullName" id="">
            <input type="submit" value="Submit">
    </form> 
    <?php
        if(isset($_POST['fullName']) && !empty($_POST['fullName'])){
            // define variables and set to empty values
            $fullName = $firstName = $lastName = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            }

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }

            function cut_name($str) {
                if (count($str) >0 ) {
                    echo "<h3>Name Is Not Empty<h3>";
                }
            }  
        }
        
    ?>


</body>
</html>