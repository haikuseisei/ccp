<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>コメント入力ページ</title>
        <?php
        //DBに接続
        $db_user='xs449197_tester1';
        $db_password='testtest1';
        $pdo = new PDO('mysql:host=localhost;dbname=xs449197_test;charset=utf8',$db_user,$db_password);
        ?>
    </head>
    <body>
        <?php
        //コメントをDBに追加
        if (isset($_REQUEST['comment']) && !empty($_REQUEST['comment'])) {
            //$comment = $_REQUEST['comment'];
            $comment = htmlspecialchars($_REQUEST['comment']);//SQLインジェクション対応済み？
            $time = date("Y/m/d H:i:s");
            
            
            $sql = $pdo->prepare('insert into comment_test (`time`, `script`) value(?, ?)');
            $sql->execute([$time,$comment]);
            $comment = '';
            
        }
        /*
        else{
            echo '<p>コメント未定義</p>';
        }
        */
        ?>
        
        <?php
        //コメントを表示
        foreach($pdo -> query('select `time`,`script` from `comment_test`') as $record){
            echo '<div>';
            echo '<p><time>', htmlspecialchars($record['time']), '</time></p>';
            echo '<p>', htmlspecialchars($record['script']),'</p>';
            echo '</div>';
        }
        ?>
    </body>
</html>