<html>
    <head>
        <title>Login Ges</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form">
        <h1>Login Aplikasi</h1>
        <h4>Admin Access</h4>
        <form action="proses_admin.php" method="post">
            <table class="kotak_login">
                <tr>
                    <td>Admin</td>
                    <td>:</td>
                    <td><Input type="text" name="admin" id="admin"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><Input type="password" name="pass" id="pass"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td><Input type="submit" class="tombol_login" value="login"></td>
                </tr>
                <tr>
                    <td>Halaman Utama <a class="link" href="../index.php"> Disini</a></td>
                </tr>
                </table>
            </div>
        </form>
    </body>
</html>