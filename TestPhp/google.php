<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Google Search</title>
</head>
<body>
    <div class="container">
        <form action="" method="GET">
            <input type="text" name="data" placeholder="Search">
            <input type="submit" value="Submit">
                <i class="fa fa-search" aria-hidden="true"></i>
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
    </div>
</body>
</html>