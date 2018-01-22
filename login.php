<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body bgcolor="#b9b3b3">
    <div id="login-wrapper">
        <div id="login-content">
            <form action="ceklogin.php" method="post">
                <table>
                <h2 align="center">LOGIN</h2>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="username" id="username" class="kontrol-form">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input type="password" name="password" id="password" class="kontrol-form">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Login" class="btn btn-p btn-block tengah" id="btn-login">
                <input type="reset" value="Reset" class="btn btn-m" id="btn-reset">
            </form>
        </div>
    </div>
</body>
</html>