<!DocTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="ja">
        <meta name="viewport" content="width=device-width">
        <title>会員登録</title>

        <link rel="stylesheet" href="../../css/signup_mail.css">
    </head>
    <body>
        <!--文章はMakuakeをまねした。変更するかも-->
        <div class="content">
            <h1>会員登録</h1>
            <p>登録に使用するメールアドレスを入力してください。</p>
            <form action="signup_mail_check.php">
                <label for="mymail">メールアドレス:</label>
                <input type="email" name="mymail" value=" <?php echo htmlspecialchars($_REQUEST['mymail']); ?> " required>
                <p style="color:red;">このメールアドレスは既に使われています。</p>
                <button type="submit">確認メールを送信して仮登録する</button>
            </form>
            <div id="errorMessage" style="color: red;"></div>
        </div>

        <script>
            document.getElementById('mymail').addEventListener('submit', function(event) {
    event.preventDefault();
 
    var email = document.getElementById('mymail').value;
    var regex = /^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,}$/;
 
    if (regex.test(email)) {
        document.getElementById('errorMessage').textContent = '';
        this.submit();
    } else {
        document.getElementById('errorMessage').textContent = '正しいメールアドレスの形式を入力してください。';
    }
});
        </script>
    </body>
</html>