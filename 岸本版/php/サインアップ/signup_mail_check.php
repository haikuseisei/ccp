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
        $sql = $pdo->prepare('select * from user_table where mail = ?');
        $sql->execute([htmlspecialchars($_REQUEST['mymail'])]);
        if (empty($sql->fetchAll())) {
            //ここに確認コード送信処理を入れる
            echo '
            <!--文章はMakuakeをまねした。変更するかも-->
            <div class="content">
                <h1>会員登録</h1>
                <p>ご入力いただいたメールアドレスに確認コードを送信しました。続けるには、送信されたコードを入力してください。</p>
                <form action="signup_main.php">
                    <label for="check_code">確認コード:</label>
                    <input type="text" name="check_code" required>
                    <button type="submit">送信</button>
                </form>
                <div id="errorMessage" style="color: red;"></div>
            </div>
            ';
        }
        else{
            echo '
            <!--文章はMakuakeをまねした。変更するかも-->
                <div class="content">
                    <h1>会員登録</h1>
                    <p>登録に使用するメールアドレスを入力してください。</p>
                    <form action="signup_mail_check.php">
                        <label for="mymail">メールアドレス:</label>
                        <input type="email" id="mymail" value="'; echo htmlspecialchars($_REQUEST['mymail']) ; echo'" required>
                        <p style="color:red;">このメールアドレスは既に使われています。</p>
                        <button type="submit">確認メールを送信して仮登録する</button>
                    </form>
                    <div id="errorMessage" style="color: red;"></div>
                </div>

        <script>
            document.getElementById("mymail").addEventListener("submit", function(event) {
            event.preventDefault();
 
            var email = document.getElementById("mymail").value;
            var regex = /^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,}$/;
 
            if (regex.test(email)) {
                document.getElementById("errorMessage").textContent = "";
                this.submit();
            } else {
                document.getElementById("errorMessage").textContent = "正しいメールアドレスの形式を入力してください。";
            }
            });
        </script>';
        }
        }
        else{
            echo 'このページは存在しません。';
        }
        ?>

    </body>
</html>