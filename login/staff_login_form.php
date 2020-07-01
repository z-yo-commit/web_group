
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <meta charset="utf-8" />
    <title>ユーザーログイン画面</title>
    <!--ウィンドウを閉じるfunction-->
    <script type="text/javascript">
        function CloseWindow() {
            window.close();
        }
    </script>

</head>

<html>

<body>
    <div class=heading>
        <h>ユーザーログイン</h>
        </br>
        </br>
    </div>

    <form name="login" class=login method="post" action="login.php">
        <label for="staff_id">ユーザーID</label>
        <input type="text" name="staff_id" required="required" placeholder="ユーザーID"></input>
        </br>
        </br>

        <label for="password">パスワード</label>
        <input type="password" name="password" required="required" placeholder="パスワード"></input>
        </br>
        </br>

        <input type="submit" class="button" title="login" value="ログイン"></input>
        <a href="#"><input type="button" class="button1" title="return" value="戻る"></input>
        </a>
        </br>
        </br>

        <input type="button" onclick="CloseWindow();" value="閉じる" />
        </br>
        </br>

        <p><a href="admin_login.php">システム管理者のログイン</a></p>
        <p><a href="../change/staff_password_change.php">パスワード変更</a></p>
        </br>
    </form>

</body>

</html>