<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Search</title>
</head>
<body>
    
    <form action="" method="GET">
        <input type="text" name="data" placeholder="Search">
        <input type="submit" value="Search">
    </form>
    <?php
        
        $data ="" ;
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if(empty($_GET['data'])) {
                echo 'Search is empty';
            } else {
                $data = $_GET['data'];
                echo $data;
            } if (checkdata($data)) {
                
                getsearch($data);
                exit;
            }
        } 
        function checkdata($str) {
            $str = htmlentities($str);
            return $str;
        }
        function getsearch($str) {
            header('Location: https://www.google.co.il/search?q=' . $str);
        }
    ?>
    
</body>
</html>