<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Your New Post</h1>
    <div>
        <?php
            //echo "<pre>";
            //var_export($_SERVER);
            //var_export($_REQUEST);  
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                var_export($_POST);
                $title = htmlentities($_POST['title']);
                $content = htmlentities($_POST['content']);
                echo "<h3>Title: $title</h3>";
                echo "<h4>content: $content</h4>";
            }
        ?>
    </div>
    <div>
        <h1>All Post</h1>
        <form action="" method="GET">
            <input type="submit" value="Get All Posts">
        </form>
        <?php
            $posts_url = 'https://jsonplaceholder.typicode.com/posts';
            $posts = array();
            if($_SERVER['REQUEST_METHOD'] == 'GET') {
                $posts_json = file_get_contents($posts_url);
                $array_posts = json_decode($posts_json);
                //echo $posts_json;
                $index = 0;
                foreach($array_posts as $post) {
                    //var_export($post);
                    $index++;
                    $title = $post->title;
                    echo $index . ')Title: ' . $title;
                    echo '</br>';
                }
            }
        ?>
        
    </div>
    
</body>
</html>