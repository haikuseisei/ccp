<!DocTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="ja">
        <meta name="viewport" content="width=device-width">
        <title>会員登録</title>

        <link rel="stylesheet" href="../../css/signin.css">
    </head>
    <body>
        <!--文章はMakuakeをまねした。変更するかも-->
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

    </body>
</html>