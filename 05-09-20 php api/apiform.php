<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Api Form</title>
</head>
<body class="container">
    <?php
        // define variables and set to empty values
        $title = $content = "";
        $titleErr = $contentErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //CHECK VALUES IN INPUT
            if (empty($_POST["title"])) {
                $titleErr = "Title is required";
            } else {
                $title = test_input($_POST["title"]);
            }
            if (empty($_POST["content"])) {
                $contentErr = "Content is required";
            } else {
                $content = test_input($_POST["content"]);
                header('Location: ./posts.php');
                exit;
            } 
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
        return $data;
        }
    ?>
    <h1>Hello <?php
        $name = 'Shirly';
        echo $name;
        ?>
    </h1>
    <?php
        echo "<h2>Add  New Post </h2>"
    ?>
    <p><span class="error">* required field</span></p>
    <div class="container add-form">
        <form  class="api-form" method="post" 
        action="./posts.php" >   
            <input type="text" name="title" placeholder="Title" required="required" >
            <span class="error">* <?php echo $titleErr;?></span><br>
            <textarea name="content" placeholder="Add Your Post" required="required" rows="5"></textarea>
            <span class="error">* <?php echo $contentErr;?></span></br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php
        echo "<h2>Your title:</h2>";
        echo $title;
        echo "<h2>Your content:</h2>";
        echo $content;
    ?>

</body>
</html>