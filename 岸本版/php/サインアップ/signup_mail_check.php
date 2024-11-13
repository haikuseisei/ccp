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
        if (isset($_REQUEST['mymail'])) {
            //メアド定義済
            session_start();
            unset($_SESSION['user']);
            $_SESSION['user']['mail'] = $_REQUEST['mymail'];
            $sql = $pdo->prepare('select * from user_table where mail = ?');
            $sql->execute([htmlspecialchars($_REQUEST['mymail'])]);
            if (empty($sql->fetchAll())) {
                //重複なし
                //ここに確認コード送信処理を入れる
                    //上の一環としてuser_tableにメールアドレスを追加する＋フラグを立てる
                //uuidが重複しないように確認する必要あり
                $ssid = uniqid();
                $sql = $pdo->prepare('insert into user_table(`mail`,`flag`,`uuid`) value(?,?,?)');
                $sql->execute([htmlspecialchars($_REQUEST['mymail']),10,$ssid]);
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
                    <div id="errorMessage" style="color: red;"></div>
                </div>
                ';

            }
            else{
                //重複あり
                require 'signup_mail_input_err.php';


            }
        }
        else{
            //メアド未定義
            echo'メールアドレス未定義';
        }
        ?>

    </body>
</html>