<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="css/CCP_プロジェクト詳細.css">
    <title>プロジェクトの詳細</title>
    <!--データベースに接続-->
    <?php
    $db_user='xs449197_kishi';
    $db_password='kHZuy7LUwi7Q';
    $pdo = new PDO('mysql:host=localhost;dbname=xs449197_test;charset=utf8',$db_user,$db_password);
        ?>
    </head>
    <body>
        <div>
        <h1>プロジェクトのタイトル</h1>
    　　</div>
        <div class="flex"><!画像は暫定的に貼ってるだけ>
            <div class="slider">
            <a href="#slide-1">1</a>
            <a href="#slide-2">2</a>
            <a href="#slide-3">3</a>
            <a href="#slide-4">4</a>
            <a href="#slide-5">5</a>
            <div class="slides" style="text-align:left">
                <div id="slide-1"><img src="data:image/png;base64,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"></div>
                <div id="slide-2"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIHBhUQEhIQFhAWEBAXEBYQFRAQFRUVGxIYGBUVFhcYKCogGRolJxMXITEiJSkrLi46FyAzODgxOCguLisBCgoKDg0OGhAQGy0lICUtKy0uLSsvLS0tLS0rLS02MjArLy8tKzAtLS0tNS0tLS0tListLy0tLy0uLTc1LS8uLf/AABEIAKMBNgMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABgcDBAUCAQj/xAA/EAACAQIDBAYHBAgHAAAAAAAAAQIDEQQFIQYSMUETIlFhcYEHFDJikaHBUnKx0RUjQkNjc7LCJDOCkqKz8P/EABsBAQACAwEBAAAAAAAAAAAAAAACAwEEBQYH/8QAMhEBAAIBAgQCCQQCAwEAAAAAAAECAwQRBRIhMUFRE2FxkaGxwdHhIjKB8CNCBiSCFP/aAAwDAQACEQMRAD8AvEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOZtDmryfAdKob/XjG191K6ereumlvNFuHH6S22+zc0OkjU5eSbbdN0cpbetS62HVu2NTX4NfU2Z0XlZ1rcBj/XJ74/LrYHbHC4p2lKVN/xVZf7ldLzaKb6bJX1+xpZuD6nH1iOaPV9u7vwkpxTTTT4Napmu5cxMTtL6GAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQrazbZYGq6GG3ZVU7VKj60YPnGK/akvgu/VLG7vcO4POWIyZulfCPGftHxlBK2OrYutv1KtSUr3vKUnbw5LyLKvR0wYsdeWlYiPYsTYDOZ4/Cyo1ZOU6dnGUtXKD0s3zaa496F426vMcY0dcV4yUjaJ8PX+UsIOKAAMdejHEUXCcVKMlaSeqaMxMxO8JUvalotWdphXe1OzTyr9bTvKg3rfV02+Cb5x7/j2vo4NRz9J7vWcN4lGo/x36W+f59SMSZfMuzDbyjP6+S1b05XhfrU5XcH26fsvvXzKMlK37tfVaDDqo2vHXzjv+fZKztns/pZ9hd6npONukhL2oP6xfJ/W6Whek1nq8brtBl0l+W/ae0+E/nzh1iDSAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEP2/2keWYdYek7V6kbykuNOHC6956pdlm+wha3g7fB+Hxmt6XJH6Y+M/aPH3easqcBV6yZbEIl1UJlJ9gqvQ7RRX26dSPy3v7CVv2uTxivNpZnymJ+n1WcVPItLMs2o5XFOrNRvwWspPwS1t3kq0m3ZsafSZc8/467/Jr5ftDhswq7kKq33wjJSg34b3HyM2x2r1mFubh+owxzWr0846/J1SDSYsVh44vDSpyV4yi4y8GrGYmYneE8eScd4vXvE7qSqdV2fFaM6k2fRq9esNWpIqmyyIesszSplGYRr0naUXqnwlHnCXan+T4opvO8bI6jTU1GKceTtPwnzj++pduTZnDOMthXp+zJcHxi+EovvT0NWXzzVaa+my2xX7x8fW3Q1wAAAAAAAAAAAAAAAAAAAAAAAAAAAGvj8XHAYKdWfswhKT8lwXfyMTOyzDitlvFK95nZSWNxM8xx061T25ybfd2RXclZLwKY6zu99ix1w44x07R/fj3IQLaszLPGBbCO7tbJ9TaKi/el84SX1Jz+1ocR66W/s+sLUKXjVWbW1ZVdoau9ykox7koqyX4+ZtY52rD2fDaxXS029rjN2LOZ0IW9kdaWJyajOftyo03J9rcVr58TTt0tOzwuspWme9a9omfmzZji1gcBUqy4Qpyk/JXsYiN52V4MU5clcceMxCip1tNePM3Ju+kRXya1SqVTdZENadQrmyyITX0VZ56rm0sJJ9Stdw7qsV9Uv8AiiuZ6vP/APItH6TDGevevf2T9p+craDxQAAAAAAAAAAAAAAAAAAAAAAAAAAACJ+kjEunkkaa/eVYqX3Ypy/FRIZOzs8ExxOebz4R8Z6fLdXMKZCr1MyzwplsITLLGBbCO7q7NRtn1H+Z9GZns09fP/Wv7FolTxyJbU7LTzHF9NRcd5pKpGTcbtKykn22srdxZW+0bO3w7ilcNPR5d9o7TDn5XsNOddSxEoqmnrCm3KUu5v8AZXhd+HEzOTybWo43SK7YYnfznw+6eRioRSSskrJLSyKnm5mZneUM9KWYPDZPCiv3tTrfdhZ2+Lj8DMTs73/HsEXz2yT/AKx09s/jdVFSqYm72cQ151SE3WRDDKZHnS2e8Ji5YPFwqwfXhOMo+MXdfgRmyOTHXJSaW7TExP8AL9H4LExxuChVj7M4QnHwlFNfiXRO8bvluXHOO9qW7xMx7mcyrAAAAAAAAAAAAAAAAAAAAAAAAAAAg3pJe9WoR7FWfxcPyK7vQ8DjauSfZ9URhTEO5Ms0KZZCEyyqmWQxu6mzNPez6l96T+EJP6CezT4hbbTX/vjCyCt5IAAAIl6S8qlmOz/SQV50Zb9lxcLWml4aS/0kbdna4Fqow6nlt2t0/nw+38qVq1DXmz3kQ13O5DmTfLjmZLjcX36OcQ8TsZh2+KjOPlGpKK+SRs4p3q+dcaxxTXZIj1T74iUlLHKAAAAAAAAAAAAAAAAAAAAAAAAAAAhXpChfEUX7tVfBx/Mru7/BZ/TePZ9UXhAQ7MyzRgTiUZlkUCe6O7s7I0d7Ok/swm/wj/cYmWhxO+2nmPOYTow80gm2mdzqYt4enJxhHSbi7OUuauuS4W7b9xGbPScK0VK0jLeN5ntv4R+UawWc18rq71OpLvjJuUH3OL/FWZDmdXNpMOeu16/z4+9ZOzmfQz3Cb0erUjZVYN3cXya7Yu2jJ1tu8nrtDfS32nrE9p8/y65JpKT9JGzH6CzFVaa/w1VvdS4U58ZQ8Oa81yNTLXln1Pe8E4j/APVi5Lz+uvf1x5/f3+KFPiVO6+AekrmWN16+i6O7sXR75V/+6a+htYf2e98+49O+uv8A+flCVlrjgAAAAAAAAAAAAAAAAAAAAAAAAAARrbnD9JgIT+zUs+5SX5pEL9nW4Rk2yWr5x8kOjEhEu/MssUS3RmXpIzzMJJsXRvXqT7IxivNtv+lGYndyOLX/AE1r7ZSfEVVQoSm+EYyb8ErkpcalZtaKx4qlxDdWbk/abbfi3dmtNnuKRFYiI7Q06sSO66sveUZjPJsyjWhfTScftQftR/LvSFb7Tur1OnrqcU47fx6p8/74Ljw1eOKw8akHeEoqUX2pq6NqJ3eFvS1LTW3eOjmbV5Qs7yGrQst5xbp91SOsH8VbwbI3rzV2bfD9VOm1Fcnh4+ye78+yo35Gk+k8z4qBnY52WNGyMozZfux+D9Q2Xw9NqzVGDkuyUuvJfGTNykbVh854ll9Lq8l/XPujpDsEmiAAAAAAAAAAAAAAAAAAAAAAAAAABq5nhFjsBOn9qOnc+MX8UjExvC7T5fRZK38lcuDhJpqzTaafJrijX3es3iY3h6SM7sPRjmYTPZSh0OVb3OcpS8vZX9PzLsfZ5/iWTmzbeUbNrPpbuTVf5cl8dPqMk7VlToo31FParScTS5nrolr1KZjdOJa9SkZ3WRZPvR3jXVyyVF8aUur9yV2l8VL5G1htvGzzXGsMVyxkj/aPjH42SwucVSO1OWeqbQ14Lh0spLwn10vLft5Gpeu1pe+0Go9Jpsdp8tvd0+jlLCkdm56R08gyb9KZvTo26spLpPuLWfyTXmiVa7y1NZq/QYbZPGI6e3wXglZG28AAAAAAAAAAAAAAAAAAAAAAAAAAAAAARXanKWqjxEFo/wDNS5P7Xh2/HtKclfGHa4dq4mPRW/j7fZHUijd1mWhReIrKEfak0kYjrO0IXvFKzae0LDw9JUKEYLhGKS8lY3YjaNnlL3m9ptPi1s7h0mUVV/Dk/gr/AEIZf2Su0luXPSfXCuZRObu9ZuxSpkolLmY5UrkoZ5ne2HfQ5y1ylSkvNNNfX4mxh/c5nFo5sET5SnxtPNq927wd87Ure1Sg34pyX0RTkjq9NwjL/g28pn6I56oQ2dT0qe7EZJ6hhnWmv1lRLdvxjDj8+Pki6ldurznFdZ6W/o69o+f4+6UE3IAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD1QHBzDZqFae9Te4+cbXj5dhRfDE9nTwcSvWNrxv6/H8s+TZIsvnvyalUtZWWkVzt395nHi5esq9XrZzRy1jaPm65c0HyS3o2fDmGYnbqgObZXLL67TT3G+pLk1yT7zl5MU0n1PT6bVVzV3jv4w0ejIw2OZ86IshjmdvZPCt5nv26sYyu+96Jf+7DZwx13c/iWWPRcvjMpmbLgOLtJlLzGEZQs5xurcLp9/arfMjaN3Q0OqjDM1t2lo5Ps1u1VOslZcIaO7962lu4xFV+p4jvXlx+/wCyUE3IAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPM4KcbNJp8U9UxMbsxMxO8OdWyGhVd9yz91tfLgUzgpPg266/PXx39rzDZ6hF8JPxk/oZjDSGZ4hmnx+DpUaMaFPdjFKPYlYsiIjs1LXted7Tu9mUQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANPG4idKtCEFBubl7baSSjfkB6wOKeI34yiozpz3ZqL3o+zGScXZaWmuK7fFhhyzE1sZh6dWUaShOEZWTm5JSjdLVW5oDJmuMeBwbnGO/O6UILRyfNLwSb8gNqlUVWmpRd4tJxa5pq6YHKoZpV/R0MROnDopU4Tn0cpOcIuKbe611kr3dnfTRPgBu4rF+rVINpdFJ7spX9mTtuX91vS/a49raD7h8V6xipxiv1cOq5ds/2orujom+1tcmB46epUxE4wVO0JRXWcrtuClyXvAZMViHRUYqO9Uk7RjfdWiu3J62iu2z4rmwMTxFTDzXSRhuSko70G+rJu0VJPk20rp8WtLaoPeIrzjio04KDvCcm5Nr2XBW0Xv8AyA94Ov6xSu1uyUpRkr7yTTs7Pmua4ceXADOAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA5Od4eeJrUo05yhO9RxlHWz3NFL3XwfPXQDYyfdWGdoSjPffTKbc5dJZXbk/aVrWfZbhwQc7Zx0aeCopTl03Q004upVdpbi3luN2XPS2gG3i6MsbmkYqc4RpQ396Kg7zneKS301pFTv/ADEBkyWLw9CVB3fRTcYtpLeg0pQatpopbun2GBz8DjFLZynRppyrPDU4bqUrRl0aTdR8Ipc766WV3oB2KmHj+j3Sa3o9G4tPW63bagY8nh0eU0la36qne/G7im2+9ttsDFSwirY2q5dIuvC27OrTTXRQ5RaT8QMmNTo4qFa0nGMakJqKcmlNwe9ZauzppWX2r8gMeKxEcdBU6b3m5QcnHWMIqScm5cE9LJcbtck2g8ZpQnWxsOjk4yVKq9HuqXXp9ST5X11Wq462aYbmX7vqi3IyitbqV95Su97eve8r3u7u/G7vcDYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/9k="></div>
                <div id="slide-3"><img src="data:image/png;base64,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"></div>
                <div id="slide-4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReka6BzKn_z3FAdUUoE85_2xeA0l-I83w0mA&s"></div>
                <div id="slide-5"><img src="data:image/png;base64,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"></div>
            </div>
        </div>    
        <div>
                <h2>支援総額　　　　　　円</h2><br>
                <div class="bar23"></div><br><!最終的にグラフの先に星をつける。装飾班頑張ってください。よろしくお願いします。>
                <h3>　　　　　　　　　　　％</h3><br>
                <h3>支援者数　　　　　　　人</h3>
                <h3>残り日数　　　　　　　日</h3>
                <h3>ジャンル：〇〇</h3><!〇〇のところにリンク形式のジャンル名を貼る>
        </div>
        </div>
        <div class="flex">
            <br><br>
            <a href="https://twitter.com/?lang=ja"><button>Xでシェア</button></a><p>&emsp;&emsp;</p>
            <a href="https://www.instagram.com/"><button>Instagramでシェア</button></a><p>&emsp;&emsp;</p>
            <a href="https://www.facebook.com/"><button>Facebookでシェア</button></a><p>&emsp;&emsp;</p>
            <div class="example2">
            <button><input type="checkbox" checked id="1" name="example2" value="favorite"><label for="1">♡</label></button>
            </div>
        </div>
        <div class="flex">
        <div>
           <div>
            <h2>プロジェクトのサブタイトル</h2><br>
            <p>プロジェクトの軽い説明を入力できる。</p>
            </div>
            <div>
            <h2>プロジェクトの詳細・投稿者からのメッセージ</h2><br>
            <p>プロジェクトの投稿者からの情報が見れるところ</p>
            </div>
        </div>
        <div>
            <div class="box">
                <h2>投稿者情報</h2><br>
                <p>プロジェクトの投稿者の情報が見れる。（名前・アカウントID・その他のプロジェクトなど）</p>
            </div>
            <div class="box">
                <h2>みんなのコメント</h2>
                <div class="comment_input">
                    <?php
                    //コメントをDBに追加
                    if (isset($_REQUEST['message']) && isset($_REQUEST['name'])) {
                        if (!empty($_REQUEST['message']) && !empty($_REQUEST['name'])){
                            //ユーザー名とコメント内容を受け取る
                            //$comment = $_REQUEST['message'];
                            $comment = htmlspecialchars($_REQUEST['message']);//SQLインジェクション対応済み？
                            $time = date("Y/m/d H:i:s");
                            $username = htmlspecialchars($_REQUEST['name']);//SQLインジェクション対応済み？
                            
                            //内容の重複確認
                            $sql = $pdo->prepare('SELECT * FROM `comment_test` WHERE script = ? and username = ?');
                            $sql->execute([$comment,$username]);
                            $sql_list[] = $sql->fetchAll();
                            if (empty($sql_list[0])){
                                $sql = $pdo->prepare('insert into comment_test (`time`, `script`,`username`) value(?, ?,?)');
                                $sql->execute([$time,$comment,$username]);
                                $comment = '';
                                $time = '';
                                $username = '';
                                $_REQUEST['message'] = '';
                                $_REQUEST['username'] = '';
                            }
                            //正常時のコメ入力欄表示
                            echo '
                            <!--コメント入力欄-->
                            <form method="post" action="CCP_プロジェクト詳細.php">
                            <p>ニックネーム：<br>
                            <input type="text" name="name" size="30"></p>
                            <p>メッセージ：<br>
                            <textarea name="message" cols="30" rows="5"></textarea></p>
                            <p><input type="submit" value="送信する"></p>
                            </form>
                            ';
                        } else{
                            //未入力時のコメ入力欄表示
                            echo '
                            <!--コメント入力欄-->
                            <p style="color:red;">未入力箇所があります<p>
                            <form method="post" action="CCP_プロジェクト詳細.php">
                            <p>ニックネーム：<br>
                            <input type="text" name="name" size="30" value="'; if (isset($_REQUEST['name'])){echo $_REQUEST['name'];} echo'"></p>
                            <p>メッセージ：<br>
                            <textarea name="message" cols="30" rows="5">'; if (isset($_REQUEST['comment'])){echo $_REQUEST['comment'];} echo '</textarea></p>
                            <p><input type="submit" value="送信する"></p>
                            </form>
                            ';
                        }
                    }else{
                        //正常時のコメ入力欄表示
                        echo '
                        <!--コメント入力欄-->
                        <form method="post" action="CCP_プロジェクト詳細.php">
                        <p>ニックネーム：<br>
                        <input type="text" name="name" size="30"></p>
                        <p>メッセージ：<br>
                        <textarea name="message" cols="30" rows="5"></textarea></p>
                        <p><input type="submit" value="送信する"></p>
                        </form>
                        ';
                    }

                    
                    ?>
                    
                </div>
                <div class="comment_display">
                    <?php
                    echo '<ul >';
                    //コメント表示
                    foreach($pdo -> query('select `time`,`script`,`username` from `comment_test` order by `time` DESC') as $record){
                        echo '<li>';
                        echo '<p class="comment_time"><time>', htmlspecialchars($record['time']), '</time></p>';
                        echo '<p class="comment_username">', htmlspecialchars($record['username']), 'さん</p>';
                        echo '<p class="comment_script">', htmlspecialchars($record['script']),'</p>';
                        echo '</li>';
                    }
                    echo '</ul>';
                    ?>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>