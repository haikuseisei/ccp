<?php session_start(); ?>
<!DocTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="ja">
        <meta name="viewport" content="width=device-width">
        <title>会員登録</title>

        <link rel="stylesheet" href="css/signup_finish.css">
        <?php
        $db_user='xs449197_tester1';
        $db_password='testtest1';
        $pdo = new PDO('mysql:host=localhost;dbname=xs449197_test;charset=utf8',$db_user,$db_password);
        ?>
    </head>
    <body>
        <?php
        //ユーザー情報登録処理
        $sql = $pdo->prepare('update user_table set username = ?, pass = ? where mail = ?;');
            $sql->execute([htmlspecialchars($_REQUEST['username']),htmlspecialchars($_REQUEST['password']),$_SESSION['user']['mail']]);



        ?>
        <?php
        echo '
        <!--文章はMakuakeをまねした。変更するかも-->
        <div class="content">
            <h1>会員登録</h1>
            <p>会員登録が完了しました。<p>
            <div class="top">
                <a href="top.html"><p>TOPページへ</p></a>
            </div>
        </div>
        ';
        ?>
    </body>
</html>