<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        First PHP Form
    </h1>
    <?php 
        echo "<h2>My PHP Title</h2>"
    ?>
    <ul>
        <?php 
            $colors = array('yellow', 'green', 'red');

            for($i = 0 ; $i < count($colors) ; $i++) {
                echo "<li>";
                echo $colors[$i];
                echo "</li>";
            }
        ?>
    </ul>
    <h3 style="color: <?php echo $colors[0];?>">
        Colored Title
    </h3>
    <?php // this comment will not show up on html page ;?>
    <?php $popup = 3;?>
    <?php if($popup == 1):?>
        <div class="popup">
            POPUP!
        </div>
    <?php elseif($popup == 2):?>
        <div class="popup">
            POPUP2!
        </div>
    <?php else:?>
        <div class="popup">
            NO POPUP!
        </div>
    <?php endif;?>
    <?php for($i = 0 ; $i < 10 ; $i++):?>
        <div>
            <?php echo $i;?>
        </div>  
    <?php endfor;?>
</body>
</html>