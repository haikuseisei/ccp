<?php session_start(); ?>
<!DocTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="ja">
        <meta name="viewport" content="width=device-width">
        <title>会員登録</title>

        <link rel="stylesheet" href="../../css/signin.css">
        <?php
        $db_user='xs449197_tester1';
        $db_password='testtest1';
        $pdo = new PDO('mysql:host=localhost;dbname=xs449197_test;charset=utf8',$db_user,$db_password);
        ?>
    </head>
    <body>
        <?php
        if (isset($_REQUEST['user'])) {
            //セッション定義済
            session_start();
                echo '
                <!--文章はMakuakeをまねした。変更するかも-->
                <div class="content">
                    <h1>会員登録</h1>
                    <p>ご入力いただいたメールアドレスに確認コードを送信しました。続けるには、送信されたコードを入力してください。</p>
                    <form action="signup_information_input.php">
                        <label for="uuid">確認コード:</label>
                        <input type="text" name="uuid" required>
                        <button type="submit">送信</button>
                    </form>
                    <div id="errorMessage" style="color: red;">uuidが間違っています</div>
                </div>
                ';

            
        }
        else{
            //セッション未定義
            echo'セッション未定義';
        }
        ?>

    </body>
</html>