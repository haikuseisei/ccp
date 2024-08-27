<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        if (isset($_REQUEST['mymail'])) {
            if (isset($_REQUEST['password'])){
                echo 'a';
            }
            else {
                echo 'b';
            }
        }
        else {
            echo 'c';
        }
        ?>
    </body>
</html>