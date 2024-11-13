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
        session_start();
        if (isset($_REQUEST['uuid'])){
            //uuid定義済み
            $sql = $pdo->prepare('select * from user_table where mail = ? and uuid = ?');
            $sql->execute([htmlspecialchars($_SESSION['user']['mail']),htmlspecialchars($_REQUEST['uuid'])]);
            if (empty($sql->fetchAll)){
                //間違い
                require 'signup_mail_check_err.php';

            }
            else{
                //成功
                $sql = $pdo->prepare('update user_table set flag = ? where mail = ?');
                $sql->execute(11,$_SESSION['user']['mail']);
                echo'<!--文章はMakuakeをまねした。変更するかも-->
                    <div class="content">
                        <h1>会員登録</h1>
                        <p>使用するユーザー名とパスワードを入力してください。</p>
                        <form action="signup_finish.php">
                            <label for="username">ユーザー名:</label>
                            <input type="text" name="username" required>
                            <label for="password">パスワード:</label>
                            <input type="password" name="password" required>
                            <button type="submit">本登録する</button>
                        </form>
                        <div id="errorMessage" style="color: red;"></div>
                    </div>
                    ';
            }
        }
        else{
            //uuid未定義
        }
        ?>
        

    </body>
</html>