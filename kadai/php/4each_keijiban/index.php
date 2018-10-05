<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <img class="logo" src="4eachblog_logo.jpg">
        <header>
            <ul>
                <li class="menu">トップ</li>
                <li class="menu">プロフィール</li>
                <li class="menu">4eachについて</li>
                <li class="menu">登録フォーム</li>
                <li class="menu">問い合わせ</li>
                <li class="menu">その他</li>
            </ul>
        </header>
        <main class="main-container">
            <div class="left">
                <h1 class="midashi1">プログラミングに役立つ掲示板</h1>
                <div class="confirm">
                    <h2 class="midashi3">入力フォーム</h2>
                    <form method="post" action="insert.php">
                        ハンドルネーム<br>
                        <input type="text" name="name">
                        <br><br>
                        タイトル<br>
                        <input type="text" name="title">
                        <br><br>
                        コメント<br>
                        <textarea name="comments" cols="40" rows="6"></textarea>
                        <br><br>
                        <input type="submit" value="投稿する" class="button1">

                    </form>
                </div>
                <br>
                <?php
                mb_internal_encoding("utf8");

                $pdo = new PDO("mysql:dbname=lesson_nagai;hostlocalhost;","root","mysql");

                $stmt = $pdo->query("select * from 4each_keijiban;");

                while($row = $stmt->fetch()){
                    echo "<div class='kiji'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo"<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div><br>";
                }
                ?>
            </div>
            <div class="right">
                <h2 class="midashi2">人気の記事</h2>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタTop5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                <h2 class="midashi2">オススメリンク</h2>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                <h2 class="midashi2">カテゴリ</h2>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
            </div>
        </main>
        
        <footer>
            copyright(c) internous | 4each blog is the one which provides A to Z about programming.
        </footer>
    </body>
</html>