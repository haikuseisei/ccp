<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="ja">
        <meta name="viewport" content="width=device-width">
        <title>会員登録</title>

        <link rel="stylesheet" href="../css/signin.css">
    </head>
    <body>
        <!--文章はMakuakeをまねした。変更するかも-->
        <div class="content">
            <h1>ログイン</h1>
            <form action="top.html">
                <p>登録されたメールアドレスに確認コードを送信しました。続けるには、送信されたコードを入力してください。</p>
                <label for="check_code">確認コード:</label>
                <input type="text" name="check_code" required>
                <button type="submit">送信</button>
            </form>
            <div id="errorMessage" style="color: red;"></div>
        </div>

    </body>
</html>