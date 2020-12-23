<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<httml lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login_error.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        
        <main>
            <form method="post" action="mypage.php">
                <div class="form_contents">
                    <div class="error_log"><p>メールアドレスまたはパスワードが間違っています。</p></div>
                    <div class="mailbox">
                        <label>メールアドレス</label><br>
                        <input type="text" class="mail" size="40" name="mail">
                    </div>
                    
                    <div class="passwordbox">
                        <label>パスワード</label><br>
                        <input type="password" class="password" size="40" name="password">
                    </div>
                    
                    <div class="loginbox">
                        <input type="submit" class="login_button" size="35" value="ログイン">
                    </div>
                </div>
            </form>
        </main>
        
        <footer>
        © 2018 internous.inc All rights reserved
        </footer>
    
    </body>
</httml>